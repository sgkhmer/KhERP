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
				url:'/api/booking_type/',
				e1:true,
				valid: true,
			    group:[
					{	class:'xs12 sm12 md12',	 key:'name',	type:'text',	 text:'BookingType',count:100	}
				],
				rules:{
					name: [
				      (v) => !!v || 'Name is required',
				      (v) => v && v.length <= 50 || 'Title must be less than 50 characters'
				    ]
				},
				data:{
					name:''
				},
				select:{
					date_added:false,
					date_modified:false
				},
				breadcrumbTitle:'Tax Class',
				breadcrumbs: [
			        {
			          text: 'Home',
			          disabled: false
			        },
			        {
			          text: 'Booking Type',
			          disabled: false
			        },
			        {
			          text: 'Create',
			          disabled: true
			        }
			    ],
			    backUrl:'/admin/booking_type/list',
			}
		},
		methods:{
			
		}
	}
</script>