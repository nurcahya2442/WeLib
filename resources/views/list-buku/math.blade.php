@extends('layouts.app')

@section('content')
<div class = "container">
	<div class="row" >
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title text-Center">Data Buku</h4>
						<div class="table-responsive">
							<table class="table table-striped" id="table">
								<thead>
									<tr>
										<th>Judul</th>
										<th>Kode Buku</th>
										<th>Pengarang</th>
										<th>Tahun</th>
										<th>Kategori</th>
										<th>Stock</th>
										<th>Action</th>
									</tr>
								</thead>
						  </div>
					</div>
				</div>
			</div>
	</div>
</div>
@endsection