<template>
	<div>
		<div class="content">
			<div class="container-fluid">
				<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
				<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
					<p class="_title0">Users <Button @click="addModal=true">Add a User</Button></p>
					
					<Modal 
                            v-model="addModal"
                            title="Add User"
                            :mask-closable="false"
                        >
						<div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="exampleFirstName"
                        placeholder="First Name"
                        v-model="first_name"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="exampleLastName"
                        placeholder="Last Name"
                        v-model="last_name"
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      class="form-control form-control-user"
                      id="exampleInputEmail"
                      placeholder="Email Address"
                      v-model="email"
                    />
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="password"
                        class="form-control form-control-user"
                        id="exampleInputPassword"
                        placeholder="Password"
                        v-model="password"
                      />
                    </div>
                    <div class="col-sm-6">
                      <input
                        type="password"
                        class="form-control form-control-user"
                        id="exampleRepeatPassword"
                        placeholder="Repeat Password"
                        v-model="password_confirm"
                      />
                    </div>
					<div class="col-sm-6 mb-3 mb-sm-0">
                      <input
                        type="text"
                        class="form-control form-control-user"
                        id="exampleAddress"
                        placeholder="address"
                        v-model="address"
                      />
                    </div>
                  </div>
						<Input type="text" @v-model="data.email" placeholder="Enter your email address"/>
						<Input type="text" @v-model="data.phone" placeholder="Enter you phone number"/>
						<Input type="text" @v-model="data.postalCode" placeholder="Enter your postal code"/>
						<Input type="text" @v-model="data.city" placeholder="Enter your City's name"/>
						<Input type="text" @v-model="data.comment" placeholder="Enter any comment"/>
                        <div slot="footer">
                            <Button type="default" @click="addModal=false">Close</Button>
                            <Button type="primary" @click="addUser" :disabled="isAdding" :loading="isAdding">{{isAdding ? 'Adding..' : "Add User"}}</Button>
                        </div>
                        </Modal>
					<div class="_overflow _table_div">
						<table class="_table">
								<!-- TABLE TITLE -->
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Address</th>
								<th>Postal Code</th>
								<th>City</th>
								<th>Comment</th>
								<th>Actions</th>
							</tr>
								<!-- TABLE TITLE -->


								<!-- ITEMS -->
							<tr>
								<td>F Name</td>
								<td class="_table_name">L Name</td>
								<td>Email</td>
								<td>Phone</td>
								<td>Address</td>
								<td>Postal Code</td>
								<td>City</td>
								<td>Comment</td>
								<td>
									<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
									<br>
									<button class="_btn _action_btn make_btn1" type="button">Delete</button>
								</td>
							</tr>
								<!-- ITEMS -->

						</table>
					</div>
				</div>
				 <Page :total="100" />

			</div>
		</div>
	</div>
</template>
<script>
export default {
	data(){
		return {
			data : {
				firstName:"", lastName:"", email:"", phone:"", address: "", postalCode:"", city:"", comment:"",
			},
			addModal : false,
			isAdding : false,
		}
	},
	methods : {
		/*
		async created(){
			const res = await this.callApi('post', '/app/create_user', this.data)
			if(res.status==200){
					console.log(res);
				} else {
					console.log(res);
				}
		}
		*/
		async addUser(){
			/*
			if(this.data.email!='' && 
			this.data.firstName!=''  &&
			this.data.lastName!=''  &&
			this.data.phone!=''  &&
			this.data.address!=''  &&
			this.data.postalCode!=''  &&
			this.data.city!=''  && 
			this.data.comment!='' ) {
				*/
			const res = await this.callApi('post', '/app/create_user', this.data);
			if(res.status==201){
				this.s("User has been created!");
			} else {
				this.swr();
			}
			}
			/* else {
				console.log(this.data.city);
				return this.e("All fields are required");
			}
			
		}*/
	}
}
</script>




			