@include('layouts.head')

<body>
@include('layouts.topbar')
@include('layouts.Adminnavbar')

<div class="container py-5">
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-primary">Manage Products</h2>

    <div>
        <!-- Add Single Product -->
        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addProductModal">
            <i class="bi bi-plus-circle me-1"></i> Add New Product
        </button>

        <!-- Upload Excel -->
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#uploadExcelModal">
            <i class="bi bi-file-earmark-excel me-1"></i> Upload Excel
        </button>
    </div>
</div>

<!-- Upload Excel Modal -->
<div class="modal fade" id="uploadExcelModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.products.uploadExcel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-file-earmark-excel me-2"></i> Upload Products via Excel
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Upload an Excel file (.xlsx or .csv) with the following columns: <strong>name, items, price</strong>.</p>
                    <div class="mb-3">
                        <label class="form-label">Choose File</label>
                        <input type="file" name="excel_file" class="form-control" accept=".xlsx,.csv" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>


    <!-- Products Table -->
    <div class="table-responsive shadow-sm rounded-3">
        <table class="table table-striped table-hover align-middle">
            

            <thead class="table-primary">
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Price (Tsh)</th>
                    <th>Stock</th>
                    <th>Units</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products ?? [] as $product)
                    <tr>
                        <td>{{ $product->id ?? 'N/A' }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->stock ?? 'N/A' }}</td>
                        <td>{{ $product->unit ?? 'N/A' }}</td>
                        <td>
                            @if($product->image)
                                <img src="{{ asset('storage/app/public/'.$product->image) }}" alt="{{ $product->name }}" width="60" class="rounded">
                            @else
                                <span class="text-muted small">No image</span>
                            @endif
                        </td>

                        <td>
                            <!-- Edit Button -->
                            <button 
                                class="btn btn-sm btn-warning me-1" 
                                data-bs-toggle="modal" 
                                data-bs-target="#editProductModal{{ $product->id }}">
                                <i class="bi bi-pencil"></i>
                            </button>

                            <!-- Delete Form -->
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <!-- Edit Product Modal -->
                    <div class="modal fade" id="editProductModal{{ $product->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header bg-warning text-white">
                                        <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Price (Tsh)</label>
                                            <input type="number" name="price" class="form-control" step="0.01" value="{{ $product->price }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Stock</label>
                                            <input type="number" name="stock" class="form-control" value="{{ $product->stock }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Units</label>
                                            <input type="text" name="unit" class="form-control" value="{{ $product->unit }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-warning">Update Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">No products found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
    {{ $products->links('pagination::bootstrap-5') }}
</div>
    </div>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><i class="bi bi-plus-circle me-2"></i>Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter product name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Price (Tsh)</label>
                        <input type="number" name="price" class="form-control" step="0.01" placeholder="Enter price" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Stock Quantity</label>
                        <input type="number" name="stock" class="form-control" placeholder="Enter stock quantity">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Units</label>
                        <input type="text" name="unit" class="form-control" placeholder="Enter units">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts.footer')
@include('layouts.links')
</body>
</html>
