@extends('main')
@section("container")
	<section class="section blog-wrap bg-gray">
		<a type="button" class="btn btn-success btn-sm float-right" href="/add">Add New Contact</a>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<h4 class="mb-4">Contact List</h4>
							<table class="table table-sm">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Name</th>
										<th scope="col">Email</th>
										<th scope="col">Phone Number</th>
										<th scope="col">Birthday</th>
										<th scope="col">Actions</th>
									</tr>
								</thead>
								<tbody>
									@foreach($contacts as $contact)
											<th scope="row">{{ $loop->iteration }}</th>
											<td>{{ $contact->name }}</td>
											<td>{{ $contact->email }}</td>
											<td>{{ $contact->phone }}</td>
											<td>{{ $contact->birthday }}</td>
											<td>
												<div>
												<form action="delete/{{ $contact->id }}" method="POST">
													<!-- <span><a class="btn btn-outline-primary btn-sm px-2 py-1" href="/edit">Edit</a></span> -->
													@csrf
													@method('DELETE')
													<span><button type="submit" class="btn btn-outline-danger btn-sm px-2 py-1" onclick="return confirm('Delete it?')">Delete</button></span>
												</form>
												</div>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection