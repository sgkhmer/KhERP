<template id="{{ $route.params.id }}">
	<v-app id="inspire">
		<!-- <normal-form
			v-bind:url="url"
			v-bind:id="dataID"
			v-bind:breadcrumb-title="breadcrumbTitle"
			v-bind:breadcrumbs="breadcrumbs"
			v-bind:form-items="group"
			v-bind:form-rules="rules"
			v-bind:form-datas="data"
			v-bind:select-items="selects"
			v-bind:back-url="backUrl"
		></normal-form> -->
		

		<section id="_content">
			<!--breadcrumbs start-->
			<div id="breadcrumbs-wrapper">
				<!-- Search for small screen -->
				<div class="header-search-wrapper grey lighten-2 hide-on-large-only">
				  <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
				</div>
				<div class="row container">
				  <div class="container">
				    <div class="col s10 m6 l6">
				      <h5 class="breadcrumbs-title">Account Rule</h5>
				      	<v-breadcrumbs>
				        	<v-icon slot="divider">/</v-icon>
			        		<v-breadcrumbs-item  v-for="item in breadcrumbs" :key="item.text" :disabled="item.disabled">
			          			{{ item.text }}
			        		</v-breadcrumbs-item>
			      		</v-breadcrumbs>
				    </div>
				    <div class="col s2 m6 l6">
				     	<router-link to="/admin/account_rule/list" replace><v-btn class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" color="success">Back</v-btn></router-link>
				    	<router-link to="/admin/account_rule/list" replace><v-btn color="primary" class="btn dropdown-settings breadcrumbs-btn right">Save</v-btn></router-link>
				    </div>
				  </div>
				</div>
			</div>
			<!--breadcrumbs end-->
			<div id="basic-form" class="section">
	            <div class="row col s12">
	            	<div class="container">
		              <!-- Form with placeholder -->
		              <div class="col s12 m12 l12">
		                <div class="_card-panel">
		                  
		                  <div class="container">
		                    <v-form v-model="valid" ref="form" lazy-validation>
		                    	<!-- /start -->
		                    	<div class="row">
			                    	<div class="col s12 m12 l3">
			                    		<div class="row">
				                    		<h4 class="header">Account Rule</h4>
				                    		<div>
				                    			Setup your account rule to control for account user. 
				                    		</div>
			                    		</div>
			                    	</div>
			                    	<div class="col s12 m12 l6">
				                      
				                      <div class="row">
				                      	<v-container grid-list-md>
				                      		<h4 class="header"><i class="material-icons text-left">info_outline</i> &nbsp; General</h4>
				                      		<div class="divider"></div>
										    <v-layout row wrap>
										    	<v-flex xs6 sm6 md6>
										      		<v-text-field label="Acccount Rule Name" v-model="name" :rules="codeRules"></v-text-field>
										      	</v-flex>
										    </v-layout>
										</v-container>
				                      </div>
				                    </div>
				                    <!-- <div class="col s12 m12 l3">
				                    	<img src="/images/NoPicture.png"/>
				                    </div> -->
				                </div>
		                      	<div class="clearfix"></div>
		                    	<!-- */end  -->

		                    </v-form>
		                  </div>
		                </div>
		              </div>
		            </div>
	            </div>
	        </div>
		</section>
	</v-app>
</template>

<style type="text/css">
	.layout.row.wrap{padding-top:10px !important;}
	.text-left{float: left;padding-top:5px;}
	.row{margin-bottom:0 !important;}
</style>
	
<script>
	import Flash from '../../../../../helper/flash'
	import axios from 'axios'
	import normalForm from '../../commons/form/normalForm.vue'
	export default{
		props:['id'],
		components:{
			'normalForm':normalForm
		},
		data(){
			return {
				dataID:0,
				e1:true,
				valid: true,
				btnImageDisabled:false,
				btnText:'Upload Image',
				imageUrl:'',
				image:null,
				url:'/api/account_rule/',
				group:[
					{	class:'xs12 sm6 md6',	 key:'name',	type:'text',	 text:'Account Rule name',count:100,	}
					
				],
				rules:{
					name: [
				      (v) => !!v || 'Username is required',
				      (v) => v && v.length <= 16 || 'Username must be less than 16 characters'
				    ]
				},
				data:{
					name:'dgdg'
				},
				selects:{
					statusItems:[
						{text:'Acitve',value:1},
						{text:'Inactive',value:0}
					],
					userGroupItems:[]
				},
			    error:false,
		    	message:[],
			    select: null,
			    items: [],
			    selectGroup:null,
			    groups:[],
			    breadcrumbTitle:'View Products',
				breadcrumbs: [
			        {
			          text: 'Home',
			          disabled: false
			        },
			        {
			          text: 'Account Rule',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/account_rule/list',
				flash:Flash.state
			}
		},
		created(){
			this.dataID=this.id
			this.getUserGroup()
			this.fetchData(this.id)
		},
		methods:{
			getImage(event){
				console.log('data after child handle: ', event)
			},
			getUserGroup(){
				axios.get('/api/users_group').then((res)=>{
					this.selects.userGroupItems=res.data
				})
			},
			fetchData(id){
				axios.get(this.url+id+'/edit').then((res)=>{
					// this.data.user_group_id=res.data.user_group_id
					// this.data.username=res.data.username
					// this.data.firstname=res.data.firstname
					// this.data.lastname=res.data.lastname
					// this.data.email=res.data.email
					// this.data.code=res.data.code
					// this.data.status=res.data.status
					// this.data.image=res.data.image
					this.data=res.data
				})
			},
			
		    checkPasswordConfirmed(){
	    		if(this.password===this.confirmPassword){
		        	this.error=false
		        }else{
		        	if(this.confirmPassword===""){
		        		this.error=false
		        	}else{
		        		this.error=true
		        	}
		        }
		        return this.error
		    },
		    onPickFile() {
		    	this.btnImageDisabled=true
		    	this.btnText="Uploading..."
		        this.$refs.fileInput.click()
		    },
		    onFilePicked(event){
		    	
		    		
		    	const files=event.target.files
		    	let filename=files[0].name;
		    	if(filename.lastIndexOf('.')<=0){
		    		return alert('Please add a valid file!')
		    	}
		    	const fileReader=new FileReader()
		    	fileReader.addEventListener('load',()=>{
		    		
		    		this.imageUrl=fileReader.result
					this.btnImageDisabled=false
		    		this.btnText="Upload Image"
		    	
		    	})
		    	fileReader.readAsDataURL(files[0])
		    	
		    },
		    clearImage(){
		    	this.imageUrl=''
		    }
		}
	}
</script>