import $ from 'jquery';
import { jsPlumb } from 'jsplumb';

$(document).ready(function() {
    const instance = jsPlumb.getInstance({
        Connector: ["Flowchart", { cornerRadius: 5, stub: 30, alwaysRespectStubs: true }],
        PaintStyle: { strokeWidth: 2, stroke: '#000000' },
        EndpointStyle: { radius: 3, fill: '#000000' },
        HoverPaintStyle: { stroke: '#1e8151' },
        ConnectionOverlays: [
            ["Arrow", { 
                location: 1,
                id: "arrow",
                length: 14,
                foldback: 0.8
            }]
        ],
        Container: "canvas"
    });

    const nodes = [
        { id: "contractSigned", text: "Contract Signed/NOA", top: 20, left: 20 },
        { id: "pbg", text: "PBG", top: 20, left: 200 },
        { id: "contractExec", text: "Contract Exec", top: 20, left: 380 },
        { id: "supplierIdentified", text: "Supplier Identified", top: 20, left: 560 },
        { id: "poIssued", text: "PO Issued", top: 20, left: 740 },
        { id: "fieldSurveyPacket", text: "Field Survey Packet", top: 100, left: 20 },
        { id: "fieldSurvey", text: "Field Survey", top: 100, left: 200 },
        { id: "sloSubmitted", text: "SLO Submitted", top: 100, left: 380 },
        { id: "poleSchedule", text: "Pole Schedule", top: 100, left: 560 },
        { id: "boqApproval", text: "BOQ Approval by Dept", top: 100, left: 740 },
        { id: "boqSubmission", text: "BOQ Submission", top: 180, left: 740 },
        { id: "materialPoRaised", text: "Material PO Raised", top: 260, left: 560 },
        { id: "materialDispatch", text: "Material Dispatch", top: 260, left: 380 },
        { id: "materialReceipt", text: "Material Receipt in Warehouse", top: 260, left: 20 },
        { id: "inspectionByDept", text: "Inspection by Dept", top: 340, left: 20 },
        { id: "qtyQualityCheck", text: "Qty & Quality Check", top: 340, left: 200 },
        { id: "matInvoiceSubmitted", text: "Mat Invoice Submitted", top: 340, left: 380 },
        { id: "workExecution", text: "Work Execution", top: 340, left: 560 },
        { id: "inspectionDept", text: "Inspection Dept", top: 340, left: 740 },
        { id: "workApproval", text: "Work Approval", top: 420, left: 740 },
        { id: "satisfactionCertificate", text: "Satisfaction Certificate", top: 420, left: 560 },
        { id: "invoiceSubmission", text: "Invoice Submission", top: 420, left: 380 },
        { id: "apsPortalUpdate", text: "APS Portal Update", top: 500, left: 20 },
        { id: "accountsReceipt", text: "Accounts Receipt", top: 500, left: 200 },
        { id: "projectClosure", text: "Project Closure", top: 500, left: 380 }
    ];

    nodes.forEach(function(node) {
        const newNode = $('<div>', {
            id: node.id,
            class: 'workflow-node',
            css: { top: node.top + 'px', left: node.left + 'px' },
            text: node.text
        });
        $('#canvas').append(newNode);
        instance.draggable(newNode);
    });

    const connections = [
        { source: "contractSigned", target: "pbg" },
        { source: "pbg", target: "contractExec" },
        { source: "contractExec", target: "supplierIdentified" },
        { source: "supplierIdentified", target: "poIssued" },
        { source: "poIssued", target: "fieldSurveyPacket", anchor: ["Bottom", "Top"] },
        { source: "fieldSurveyPacket", target: "fieldSurvey" },
        { source: "fieldSurvey", target: "sloSubmitted" },
        { source: "sloSubmitted", target: "poleSchedule" },
        { source: "poleSchedule", target: "boqApproval" },
        { source: "boqApproval", target: "boqSubmission", anchor: ["Bottom", "Top"] },
        { source: "boqSubmission", target: "materialPoRaised", anchor: ["Bottom", "Top"] },
        { source: "materialPoRaised", target: "materialDispatch" },
        { source: "materialDispatch", target: "materialReceipt" },
        { source: "materialReceipt", target: "inspectionByDept", anchor: ["Bottom", "Top"] },
        { source: "inspectionByDept", target: "qtyQualityCheck" },
        { source: "qtyQualityCheck", target: "matInvoiceSubmitted" },
        { source: "matInvoiceSubmitted", target: "workExecution" },
        { source: "workExecution", target: "inspectionDept" },
        { source: "inspectionDept", target: "workApproval", anchor: ["Bottom", "Top"] },
        { source: "workApproval", target: "satisfactionCertificate" },
        { source: "satisfactionCertificate", target: "invoiceSubmission" },
        { source: "invoiceSubmission", target: "apsPortalUpdate", anchor: ["Bottom", "Left"] },
        { source: "apsPortalUpdate", target: "accountsReceipt" },
        { source: "accountsReceipt", target: "projectClosure" }
    ];

    connections.forEach(function(connection) {
        instance.connect({
            source: connection.source,
            target: connection.target,
            anchor: connection.anchor || ["Right", "Left"],
            endpoint: "Blank"
        });
    });

    // Add text labels
    $('#canvas').append('<div class="chart-label" style="top: 580px; left: 20px;">BUSINESS PROCESS WORKFLOW</div>');
    $('#canvas').append('<div class="chart-label" style="top: 600px; left: 700px;">CHHINDWARA FLOWABLE</div>');
});