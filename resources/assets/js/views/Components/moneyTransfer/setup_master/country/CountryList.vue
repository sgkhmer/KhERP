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
				url:'/api/country/',
				btnNewUrl:'/admin/country/add',
				listTitle:'Country List',
				headers: [
			        { text: 'Country ID',align: 'left',class:'text-xs-left',value: 'country_id'},
			        { text: 'Country Name',align:'left',class:'text-xs-left', value: 'name' },
			        { text: 'Iso Code 2',align:'left',class:'text-xs-left', value: 'iso_code_2' },
			        { text: 'Iso Code 3',align:'left',class:'text-xs-left', value: 'iso_code_3' },
			        { text: 'Address Format',align:'left',class:'text-xs-left', value: 'address_format' },
			        { text: 'Postcode Required',align:'left',class:'text-xs-left', value: 'postcode_required' },
			        { text: 'Status',align:'left',class:'text-xs-left', value: 'status' },
			        {text: 'Action',align:'center',class:'text-xs-center',value:'country_id',status:'status',sortable: false}
			    ],
				attribute:[],
				breadcrumbTitle:'Country List',
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
			          text: 'Lists',
			          disabled: true
			        }
			    ]
			}
		},
		components:{'dataTable':dataTable,'breadcrumb1btn':breadcrumb1btn},
		created(){
			this.fetchData()
			document.title = 'Country List';
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