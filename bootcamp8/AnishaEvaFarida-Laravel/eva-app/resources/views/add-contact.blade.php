@extends('main')
@section("container")
	<section class="section blog-wrap bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-12">
							<form class="contact-form bg-white rounded p-5" id="comment-form" action="" method="POST">
								@csrf
								<h4 class="mb-4">Add New Contact</h4>
								<div class="form-group">
									<label>Name</label>
									<input class="form-control" type="text" name="name" id="name" placeholder="input contact name" required>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="email" id="email" placeholder="input contact email" required>
								</div>
								<div class="form-group">
									<label>Phone Number</label>
									<input class="form-control" type="text" name="phone" id="phone" pattern="[0][0-9]{11}" title="Starting with 0, max 12" required>
								</div>
								<div class="form-group">
									<label>Birthday</label>
									<input class="form-control" type="date" name="birthday" id="birthday" placeholder="input contact birthday" required>
								</div>
								<button class="btn btn-outline-primary btn-round-full float-right" type="submit" name="submit-contact" id="submit-contact">Save Contact</button>
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection