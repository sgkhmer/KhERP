<template>

	<v-app id="inspire">

		<!--breadcrumbs start-->
		<breadcrumb1btn 
			v-bind:breadcrumb-item="breadcrumbs"
			v-bind:btn-new-url="btnNewUrl"
			v-bind:breadcrumb-title="breadcrumbTitle"
		></breadcrumb1btn>

		<!--Data table component-->

	    <data-table 
	    	v-bind:list-title="listTitle"
	    	v-bind:data-header="headers" 
	    	v-bind:data-value="attribute"
	    	v-bind:url="url"
    		v-bind:btn-new-url="btnNewUrl"
	    	v-on:change="fetchData"
	    	v-bind:del="true"
	    	v-bind:eye="false">
	    </data-table>

	    <!--End of data table-->

	</v-app>

</template>

<script>
	import Flash from '../../../../../helper/flash'
	import axios from 'axios'
	import dataTable from '../../commons/tables/dataTable.vue'
	import breadcrumb1btn from '../../commons/breadcrumb/breadcrumb1btn.vue'
	export default{
		props:[
			'id'//this use to pass id of record to data table component
		],
		data(){
			return{
				url:'/api/booking_type/',
				btnNewUrl:'/admin/booking_type/add',
				listTitle:'Booking Type List',
				headers: [
			        { text: 'BookingType ID',align: 'left',class:'text-xs-left',value: 'booking_type_id'},
			        { text: 'Booking Type',align:'left',class:'text-xs-left', value: 'name' },
			        {text: 'Action',align:'center',class:'text-xs-center',value:'booking_type_id',status:'status',sortable: false}
			    ],
				attribute:[],
				breadcrumbTitle:'Booking Type List',
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
			          text: 'Lists',
			          disabled: true
			        }
			    ]
			}
		},
		components:{'dataTable':dataTable,'breadcrumb1btn':breadcrumb1btn},
		created(){
			this.fetchData()
			document.title = 'Booking Type List';
		},
		methods:{
			fetchData(){
				axios.get(this.url).then(response=>{
					this.attribute=response.data;
				});
			}
		}
	}
</script>