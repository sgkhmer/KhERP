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
				url:'/api/delivery_method/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm6 md6',key:'name',	type:'text',	 text:'Name'}
				],
				rules:{
					name: [
				      (v) => !!v || 'Name is required',
				      (v) => v && v.length <= 50 || 'Title must be less than 50 characters'
				    ]
				},
				data:{
					name:'',
					created_by:1,
					modified_by:1,
					created_at:'2018-01-25',
					updated_at:'2018-01-25'
				},
				select:{
					created_at:false,
					updated_at:false,
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
		methods:{
			
		}
	}
</script>