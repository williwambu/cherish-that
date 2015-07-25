<div class="container">
	<div class="row">
			<div class="center">
				<h5 class="section-header">Order A Cake</h5>
				<span class="header-underline"></span>
			</div>
			<div class="col s12 l12 m12">
				<p class="about">
					To start your cake order, please click below so we can get some basic information regarding your 
					event and what you are looking for in terms of the cake design and concept. After your form is submitted,
					 member of our team will contact you regarding your order, either to provide a quote, ask for more information, 
					 or schedule a design appointment.
				</p>
				<div class="form-holder col s12 m7 l7 offset-m3 offset-l3 ">
					<div class="center">
						<h5 class="smaller-header">Fill this form to Order A Cake.</h5>
						<span class="header-underline"></span>
					</div>
					<form class="order-form">
						<div class="input-field">
							 <i class="material-icons prefix custom-icon">account_circle</i>
							<input id="name" type="text" name="name" class="" validate/>
							<label for="name">Your Name</label>
						</div>
						<div class="input-field">
							<i class="material-icons prefix custom-icon">phone</i>
							<input id="phone-number" type="text" name="phone-number">
							<label for="phone-number">Phone Number</label>
						</div>
						<div class="input-field">
							<i class="material-icons prefix custom-icon">email</i>
							<input id="email" name="email" type="email" validate>
							<label for="email">Your Email</label>
						</div>
						<div class="input-field">
							<i class="material-icons  custom-icon">cake</i>
						    <select id="cake-type" class="browser-default"> 
						      <option value="1" selected>Wedding Cake</option>
						      <option value="2">Birthday Cake</option>
						      <option value="3">Other</option>
						    </select>
						</div>
						<div class="input-field">
				          <textarea id="about-event" name="event-details"class="materialize-textarea"></textarea>
				          <label for="textarea1">Tell us about your event</label>
				        </div>
						<div class="input-field">
							<a  class="btn waves-orange waves-effect btn-custom">Submit Order</a>
						</div>
					</form>
				</div>
			</div>
	</div>
</div>