<div class="orderific-table-wrapper">
    <div class="mb-3">
    <h2>Inventory</h2>
    </div>
    <div class="orderific-table inventory-table">
        <div class="orderific-filters">
            <div class="search-area filter-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M16.3333 17.5L11.0833 12.25C10.6667 12.5833 10.1875 12.8472 9.64583 13.0417C9.10417 13.2361 8.52778 13.3333 7.91667 13.3333C6.40278 13.3333 5.12153 12.809 4.07292 11.7604C3.02431 10.7118 2.5 9.43056 2.5 7.91667C2.5 6.40278 3.02431 5.12153 4.07292 4.07292C5.12153 3.02431 6.40278 2.5 7.91667 2.5C9.43056 2.5 10.7118 3.02431 11.7604 4.07292C12.809 5.12153 13.3333 6.40278 13.3333 7.91667C13.3333 8.52778 13.2361 9.10417 13.0417 9.64583C12.8472 10.1875 12.5833 10.6667 12.25 11.0833L17.5 16.3333L16.3333 17.5ZM7.91667 11.6667C8.95833 11.6667 9.84375 11.3021 10.5729 10.5729C11.3021 9.84375 11.6667 8.95833 11.6667 7.91667C11.6667 6.875 11.3021 5.98958 10.5729 5.26042C9.84375 4.53125 8.95833 4.16667 7.91667 4.16667C6.875 4.16667 5.98958 4.53125 5.26042 5.26042C4.53125 5.98958 4.16667 6.875 4.16667 7.91667C4.16667 8.95833 4.53125 9.84375 5.26042 10.5729C5.98958 11.3021 6.875 11.6667 7.91667 11.6667Z" fill="black"/>
                </svg>
                <input type="search" name="search" placeholder="Search...">
            </div>
            <div class="frm-item filter-item">
                <label class="frm-label" for="">Category</label>
                <div class="select-parent-frm">
                    <select class="frm-select" name="Category">
                    <option value="">All</option>
                    </select>
                </div>
            </div>
            <div class="frm-item filter-item">
                <label class="frm-label" for="">Supplier</label>
                <div class="select-parent-frm">
                    <select class="frm-select" name="Supplier">
                    <option value="">All</option>
                    </select>
                </div>
            </div>
            <div class="frm-item filter-item">
                <label class="frm-label" for="">Metrics</label>
                <div class="select-parent-frm">
                    <select class="frm-select" name="Metrics">
                    <option value="">All</option>
                    </select>
                </div>
            </div>
            <div class="table-button ms-auto">
              <button class="btn add-btn"><i class="fa fa-plus" aria-hidden="true"></i> Add Inventory</button>
            </div>
        </div>
        <div class="custom-table">
        <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th># <i class="fa fa-arrow-down" aria-hidden="true"></i></th>
                    <th>Item</th>
                    <th>Category</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Metrics</th>
                </tr>  
            </thead>
            <tbody>
                <tr>
                    <td>213</td>
                    <td>Rice</td>
                    <td>Grains</td>
                    <td>Sysco</td>
                    <td>4</td>
                    <td>Kg</td>
                </tr> 
                <tr>
                    <td>212</td>
                    <td>Coffee</td>
                    <td>Beverages</td>
                    <td>US Foods</td>
                    <td>1</td>
                    <td>Kg</td>
                </tr> 
                <tr>
                    <td>210</td>
                    <td>Tea</td>
                    <td>Beverages</td>
                    <td>Restaurant Depot</td>
                    <td>11</td>
                    <td>Unit</td>
                </tr> 
                <tr>
                    <td>209</td>
                    <td>Bottled water</td>
                    <td>Beverages</td>
                    <td>Cargill</td>
                    <td>8</td>
                    <td>Unit</td>
                </tr> 
                <tr>
                    <td>208</td>
                    <td>Beer</td>
                    <td>Beverages</td>
                    <td>Tyson Foods</td>
                    <td>6</td>
                    <td>Lt</td>
                </tr> 
            </tbody>    
        </table>
        </div>
        <div class="pagination">
            <div class="d-flex align-items-center gap-2">
                <p class="rpp">Rows Per Page: </p>
                <select class="frm-select" name="rows">
                    <option value="">5</option>
                    <option value="">10</option>
                    <option value="">15</option>
                    <option value="">20</option>
                </select>
            </div>
            <p class="total-pgs">1–5 of 47</p>
            <div class="pagi-arrows">
                <button class="first disabled" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M6 14V6H7.5V14H6ZM14 14L10 10L14 6L15.0625 7.0625L12.125 10L15.0625 12.9375L14 14Z" fill="black"/>
                    </svg>
                </button>
                <button class="prev disabled" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M9.0625 10L13 6.0625L11.9375 5L6.9375 10L11.9375 15L13 13.9375L9.0625 10Z" fill="black"/>
                    </svg>
                </button>
                <button class="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M10.875 10L6.9375 6.0625L8 5L13 10L8 15L6.9375 13.9375L10.875 10Z" fill="black"/>
                    </svg>
                </button>
                <button class="last">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M7 14L5.9375 12.9375L8.875 10L5.9375 7.0625L7 6L11 10L7 14ZM13.5 14V6H15V14H13.5Z" fill="black"/>
                    </svg>
                </button>
            </div>
        </div>
        </div>
    </div>
</div>