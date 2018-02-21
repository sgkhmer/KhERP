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
				url:'/api/delivery_method/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm6 md6',	 key:'name',	type:'text',	 text:'Name'}
				],
				rules:{
					title: [
				      (v) => !!v || 'Title is required',
				      (v) => v && v.length <= 50 || 'Title must be less than 50 characters'
				    ],
				    code: [
				      (v) => !!v || 'Code is required',
				      (v) => v && v.length <= 3 || 'Code must be less than 3 characters'
				    ],
					decimal_place: [
				      (v) => !!v || 'Decimal Place is required',
				      (v) => v && v.length <= 50 || 'Decimal Place must be less than 50 characters'
				    ],
				    value: [
				      (v) => !!v || 'Value is required'
				    ],
				    date_modified:[
				      (v) => !!v || 'Date Requied is required'
				    ]
				},
				data:{
					title:'',
					code:'',
					symbol_left: '',
					symbol_right: '',
					decimal_place:'',
					value:0,
					status:0,
					date_modified:''
				},
				select:{
					date_added:false,
					date_modified:false,
					statusItems:[
						{text:'Active',value:1},
						{text:'Inactive',value:0}
					]
				},
				select:{
					statusItems:[
						{text:'Active',value:1},
						{text:'Inactive',value:0}
					]
				},
				breadcrumbTitle:'Delivery Method',
				breadcrumbs: [
			        {
			          text: 'Administrator',
			          disabled: false
			        },
			        {
			          text: 'Delivery Method',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/delivery_method/list',
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