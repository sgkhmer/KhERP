<template>
	<v-app id="inspire">
		<normal-form
			v-bind:url="url"
			v-bind:id="0"
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
		components:{
			'normalForm':normalForm
		},
		data(){
			return{
				url:'/api/country/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm12 md12',	 key:'name',	type:'text', text:'Country Name',count:100	},
					{	class:'xs12 sm6 md6',	 key:'iso_code_2',	type:'text',text:'ISO Code 2',count:3	},
					{	class:'xs12 sm6 md6',	 key:'iso_code_3',	type:'text', text:'ISO Code 3',count:100	},
					{	class:'xs12 sm6 md6',	 key:'address_format',	type:'text',text:'Address Format',count:0,value:''	},
					{	class:'xs12 sm6 md6',	 key:'postcode_required',type:'number',	 text:'Postcode Required',count:0,value:''	},
					{	class:'xs12 sm6 md6',	 key:'status',	type:'select', text:'Status',count:0,items:'statusItems'	}
				],
				rules:{
					name: [
				      (v) => !!v || 'Name is required',
				      (v) => v && v.length <= 50 || 'Title must be less than 50 characters'
				    ]
				},
				data:{
					name:'',
					iso_code_2:'',
					iso_code_3:'',
					address_format:'',
					postcode_required:'',
					status:''
				},
				select:{
					date_added:false,
					date_modified:false,
					statusItems:[
						{text:'Active',value:1},
						{text:'Inactive',value:0}
					]
				},
				breadcrumbTitle:'Tax Class',
				breadcrumbs: [
			        {
			          text: 'Home',
			          disabled: false
			        },
			        {
			          text: 'Country',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/country/list',
			}
		},
		methods:{
			
		}
	}
</script>