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
				url:'/api/delivery_method/',
				btnNewUrl:'/admin/delivery_method/add',
				listTitle:'Delivery Method List',
				headers: [
			         { text: 'DeliveryMethod ID',align: 'left',class:'text-xs-left',value:'delivery_method_id'},
			        { text: 'Name',align:'left',class:'text-xs-left', value: 'name' },
			        {text: 'Action',align:'center',class:'text-xs-center',value:'delivery_method_id',sortable: false}
			    ],
				attribute:[],
				breadcrumbTitle:'Delivery Method List',
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
			          text: 'Lists',
			          disabled: true
			        }
			    ]
			}
		},
		components:{'dataTable':dataTable,'breadcrumb1btn':breadcrumb1btn},
		created(){
			this.fetchData()
			document.title = 'Delivery Method List';
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