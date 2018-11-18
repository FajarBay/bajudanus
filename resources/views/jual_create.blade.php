
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content row">
            <!-- Remove This Before You Start -->
            <h1>Upload File</h1>
            <hr>
            <form action="{{ route('jual.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                </div>
                <div class="form-group">
                    <label for="email">File:</label>
                    <input type="file" class="form-control" id="jual" name="jual">
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
