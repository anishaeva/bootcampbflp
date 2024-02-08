@extends('main')
@section("container")
	<section class="section blog-wrap bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<form class="contact-form bg-white rounded p-5" id="comment-form" action="" method="POST">
								<h4 class="mb-4">Edit Contact</h4>
								<input class="form-control" type="hidden" name="id" id="name" required value="">
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="name" id="name" required value="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" id="email" required value="">
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input class="form-control" type="text" name="phone" id="phone" required pattern="[0][0-9]{12}" title="Starting with 0, max 12" value="">
								</div>
								<div class="form-group">
									<label>Birthday</label>
									<input class="form-control" type="date" name="birthday" id="birthday" required value="">
								</div>
								<button class="btn btn-outline-primary btn-round-full float-right" type="submit" name="edit-contact" id="edit-contact">Save Contact</button>
								<br>
							</form>
						</div>
					</div>
				</div>
				<a type="button" class="btn btn-info btn-block" href="/">See Contact List</a>
			</div>
		</div>
	</section>
@endsection