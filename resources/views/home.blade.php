@extends('layouts.app')

@section('content')
<div class = "container">
	<div class = "row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
						 <div class="clearfix">
							  <p class="mb-0 text-center">Transaksi</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-center mb-0">Dicoding</h3>
							</div>
						</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Transaksi Dilakukan
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
						 <div class="clearfix">
							  <p class="mb-0 text-center">Sedang Pinjam</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-Center mb-0">Dicoding</h3>
							</div>
						</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Buku Sedang Dipinjam
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
						 <div class="clearfix">
							  <p class="mb-0 text-center">Buku yang Tersedia</p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-Center mb-0">Dicoding</h3>
							</div>
						</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Buku yang Tersedia
					</p>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
			<div class="card card-statistics">
				<div class="card-body">
						 <div class="clearfix">
							  <p class="mb-0 text-center"> Buku </p>
							<div class="fluid-container">
								<h3 class="font-weight-medium text-Center mb-0">Dicoding</h3>
							</div>
						</div>
					<p class="text-muted mt-3 mb-0">
						<i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Jenis Buku
					</p>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="row" >
		<div class="col-lg-12 grid-margin stretch-card">
		<a class = "btn btn-primary" type = "submit" href = ""> Tambah Data </a>
			<div class="card">
				<div class="card-body">
					<h4 class="card-title text-Center">Data Transaksi Sedang Dipinjam</h4>
					<div class="table-responsive">
						<table class="table table-striped" id="table">
							<thead>
								<tr>
									<th>Kode</th>
									<th>Buku</th>
									<th>Peminjam</th>
									<th>Tgl Pinjam</th>
									<th>Tgl Kembali</th>
									<th>Status</th>
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
