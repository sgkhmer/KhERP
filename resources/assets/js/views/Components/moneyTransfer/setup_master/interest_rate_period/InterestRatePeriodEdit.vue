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
				url:'/api/interest_rate_period/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm6 md6',	 key:'name',	type:'text',	 text:'Interest Rate Period',count:100	}
				],
				rules:{
					name: [
				      (v) => !!v || 'Interest Rate Period Name is required',
				      (v) => v && v.length <= 100 || 'Title must be less than 100 characters'
				    ]
				},
				data:{
					name:''
				},
				breadcrumbTitle:'Interest Rate Period',
				breadcrumbs: [
			        {
			          text: 'Administrator',
			          disabled: false
			        },
			        {
			          text: 'Interest Rate Period',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/interest_rate_period/list',
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