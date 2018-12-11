<div class="form-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Admission
				<span class="font-weight-bold">form</span>
			</h3>
			<div class="register-form pt-md-4">
				<form action="#" method="post">
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Your Name" name="Your name" required="">
					</div>
					<div class="styled-input form-group">
						<input id="datepicker" class="form-control" placeholder="Birth Date" name="Text" type="text" value="" onfocus="this.value = '';"
						 onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="styled-input agile-styled-input-top form-group">
						<select class="category2" required="">
							<option value="">Gender</option>
							<option value="">Female</option>
							<option value="">Male</option>
						</select>
					</div>
					<div class="styled-input form-group">
						<input type="email" class="form-control" placeholder="Your E-mail" name="Email" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Phone Number" name="Phone" required="">
					</div>
					<div class="styled-input agile-styled-input-top form-group">
						<select class="category2" required="">
							<option value="">Select Faculty</option>
							<option value="">MCB</option>
							<option value="">PCM</option>
							<option value="">MEC</option>
							<option value="">MEG</option>
						</select>
						<span></span>
					</div>
					<div class="styled-input form-group">
						<div class="agileits_w3layouts_grid">
							<select class="category2" name="category1" required="">
								<option value="">Living Condition</option>
								<option value="">Boarding</option>
								<option value="">Day</option>
							</select>
						</div>
					</div>
					<div class="styled-input">
						<label class="header-admin-form font-weight-bold text-dark my-3">Your Address</label>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Address" title="Please enter your Address" required="">
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Line" title="Please enter your Line" required="">
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="City" title="Please enter your City" required="">
						</div>
						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Zip Code (Optional)" title="Please enter your Zip code" required="">
						</div>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!-- admission form -->