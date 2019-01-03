/*
 * PHP to add styles to ACF backend.
 * This is especially helpful with WordPress 5.0.
 * Editor styles make it difficult to distinguish parts fo the editor.
 */

function my_acf_admin_head() {
?>
<style type="text/css">

    .acf-flexible-content .layout .acf-fc-layout-handle{
        background-color: #f1f1f1;
	    border-style: solid;
	    border-width: 1px;
	    border-color: #d3d3d3;
	    padding: 20px;
    }
    
    .acf-repeater .acf-row-handle span{
	    font-weight: normal;
	    margin-top: 50%;
	    font-size: 16px;
	    display: block;
	    position: relative;
    }
    
    .acf-flexible-content .layout{
	    border: none;
    }
    
    .hndle.ui-sortable-handle{
	    background-color: #f1f1f1;
	    margin: 0 0 20px 0;
	    border-style: solid;
	    border-width: 1px;
	    border-color: #d3d3d3;
    }
    
    .ui-sortable .acf-fields > .acf-field{
	    border-top: none;
	    transition:all 0.5s;
	    padding: 20px;
    }
    
     .ui-sortable .acf-fields > .acf-field:hover{
	    -webkit-box-shadow:inset 0 0 10px 0 #ccc;
		box-shadow:inset 0 0 10px 0 #ccc;
     }
    
	.acf-actions{
		padding: 10px;
	}
    
    .hndle.ui-sortable-handle span{
	    color: #000;
    }

    .acf-repeater.-row > table > tbody > tr > td,
    .acf-repeater.-block > table > tbody > tr > td {
        border-top: 1px solid #ccc;
    }

    .acf-repeater .acf-row-handle {
        vertical-align: top !important;
        padding-top: 16px;
    }

    .acf-repeater .acf-row-handle span {
        font-size: 20px;
        font-weight: bold;
        color: #202428;
    }

    .imageUpload img {
        width: 75px;
    }

    .acf-repeater .acf-row-handle .acf-icon.-minus {
        top: 30px;
    }
    
    .edit-post-meta-boxes-area .postbox{
	    display: block;
	    position: relative;
	    clear: both;
	    margin: 0 0 20px 0;
    }
    
    .acf-fields > .acf-field{
	    border-style: solid;
	    border-width: 1px;
	    border-color: #d3d3d3;
    }
    
    
    .acf-postbox > .hndle .acf-hndle-cog {
    	color: #000 !important;
    }
    
    .edit-post-meta-boxes-area .postbox>.inside{
	    border-bottom: none;
    }

</style>
<?php
}

add_action('acf/input/admin_head', 'my_acf_admin_head');
