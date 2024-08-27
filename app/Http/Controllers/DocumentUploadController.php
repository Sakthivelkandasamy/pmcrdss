<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DocumentUpload;
use Illuminate\Support\Facades\Storage;
use Aws\S3\S3Client;
use Illuminate\Support\Str;
use Aws\Exception\AwsException;
use Illuminate\Support\Facades\Log;

class DocumentUploadController extends Controller
{
    public function index()
    {
        $files = DocumentUpload::all();
        
        return view('dcoument-upload', compact('files'));
    }
    public function create()
    {
    return view('dcoument-create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|file',
            'folder' => 'required|string',
        ]);

        try {
            $s3 = new S3Client([
                    'version' => 'latest',
                    'region'  => env('AWS_DEFAULT_REGION'),
                    'credentials' => [
                        'key'    => env('AWS_ACCESS_KEY_ID'),
                        'secret' => env('AWS_SECRET_ACCESS_KEY'),
                    ],
                   // 'http' => ['verify' => false] ,
                ]);

            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();

            $result = $s3->putObject([
                'Bucket' => env('AWS_BUCKET'),
                'Key'    => $fileName,
                'Body'   => fopen($file->getRealPath(), 'r'),
                'ACL'    => 'public-read', // Makes the file publicly readable
            ]);


             $fileUrl = $result['ObjectURL'];
            
        } catch (AwsException $e) {
            Log::error('AWS SDK Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error: ' . $e->getMessage()
            ], 500);
        }

        $fileModel = new DocumentUpload();
        $fileModel->name = $fileName;
        $fileModel->path = $fileUrl;
        $fileModel->save();
        return redirect()->route('documentlist');
    }

    public function destroy($id)
    {
        $file = DocumentUpload::findOrFail($id);
        $file->delete();

        return redirect()->route('documentlist');
    }

   
}