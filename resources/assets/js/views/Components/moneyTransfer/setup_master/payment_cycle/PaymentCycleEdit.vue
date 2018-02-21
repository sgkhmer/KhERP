<template id="{{ $route.params.id }}">
	<v-app id="inspire">
		<normal-form
			v-bind:url="url"
			v-bind:id="id"
			v-bind:breadcrumb-title="breadcrumbTitle"
			v-bind:breadcrumbs="breadcrumbs"
			v-bind:form-items="group"
			v-bind:form-rules="rules"
			v-bind:form-datas="data"
			v-bind:select-items="select"
			v-bind:back-url="backUrl"
		></normal-form>
	</v-app>
</template>

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
			return{
				url:'/api/payment_cycle/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm6 md6',	 key:'name',	type:'text',	 text:'Payment Cycle',count:100	}
				],
				rules:{
					name: [
				      (v) => !!v || 'Payment Cycle is required',
				      (v) => v && v.length <= 100 || 'Title must be less than 100 characters'
				    ]
				},
				data:{
					name:''
				},
				breadcrumbTitle:'Payment Cycle',
				breadcrumbs: [
			        {
			          text: 'Administrator',
			          disabled: false
			        },
			        {
			          text: 'Payment Cycle',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/payment_cycle/list',
			}
		},
		created(){
			this.dataID=this.id
			this.fetchData(this.id)
		},
		methods:{
			fetchData(id){
				axios.get(this.url+id+'/edit').then(res=>{
					this.data=res.data
					console.log(res.data)
				});
			}
		}
	}
</script>