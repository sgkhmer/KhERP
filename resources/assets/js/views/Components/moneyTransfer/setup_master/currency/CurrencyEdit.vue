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
				url:'/api/currencies/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm6 md6',	 key:'title',type:'text',text:'Title',count:100	},
					{	class:'xs12 sm6 md6',	 key:'code',type:'text',text:'Code',count:3},
					{	class:'xs12 sm6 md6',	 key:'symbol_left',	type:'text',text:'Symbol Left',count:100	},
					{	class:'xs12 sm6 md6',	 key:'symbol_right',type:'text',text:'Symbol Right',count:50},
					{	class:'xs12 sm6 md6',	 key:'decimal_place',type:'text',text:'Decimal Place',count:50},
					{	class:'xs12 sm6 md6',	 key:'value',type:'number',text:'Value',count:50},
					{	class:'xs12 sm6 md6',	 key:'status',type:'select',text:'Status',count:0,items:'statusItems'	},
					{	class:'xs12 sm6 md6',	 key:'date_modified',type:'date',text:'Date Modified',count:20	}
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
				breadcrumbTitle:'Currency',
				breadcrumbs: [
			        {
			          text: 'Administrator',
			          disabled: false
			        },
			        {
			          text: 'Currency',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/currencies/list',
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