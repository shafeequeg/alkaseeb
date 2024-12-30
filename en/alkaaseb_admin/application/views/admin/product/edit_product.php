<?php $this->view("includes/inc_page_head_".$user_role);?>

<!--begin::Page Styles -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>template/assets/vendors/custom/DataTables/datatables.min.css"/>
<link href="<?php echo base_url() ?>template/main/plugins/bootstrap-summernote/summernote.css" rel="stylesheet" type="text/css" />
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title m-subheader__title--separator">
                            Portfolio
                        </h3>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                            <li class="m-nav__item m-nav__item--home">
                                <a href="<?php echo base_url()?>dashboard" class="m-nav__link m-nav__link--icon">
                                    <i class="m-nav__link-icon la la-home"></i>
                                </a>
                            </li>
                            <li class="m-nav__separator">
                                -
                            </li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Create
											</span>
                                </a>
                            </li>
                            <li class="m-nav__separator">
                                -
                            </li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												    
											</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div style="max-width: 800px">
                        <?php if ($this->session->flashdata('flashdata_msg') != "")
                        {?>
                            <div class="alert alert-<?php echo $this->session->flashdata('alert_type')?> alert-dismissible fade show   m-alert m-alert--air m-alert--outline m-alert--outline-2x" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                <strong>
                                    <?php echo $this->session->flashdata('flashdata_title')?>
                                </strong>
                                <?php echo $this->session->flashdata('flashdata_msg')?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                
                <div class="m-portlet m-portlet--mobile m-portlet--mobile m-portlet--info m-portlet--head-solid-bg m-portlet--bordered m-portlet--rounded">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    View
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">

                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Search Form -->
                        <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                            <div class="row align-items-center">
                                <div class="col-xl-8 order-2 order-xl-1">
                                    <div class="form-group m-form__group row align-items-center">


                                    </div>
                                </div>
                                <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                                    <a href="#" data-toggle="modal" data-target="#article_add_modal" class="btn btn-focus m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                                        <span>
                                            <i class="la la-plus"></i>
                                            <span>
                                                ADD
                                            </span>
                                        </span>
                                    </a>
                                    <div class="m-separator m-separator--dashed d-xl-none"></div>
                                </div>
                            </div>
                        </div>
                        <!--end: Search Form -->
                        <!--begin: Datatable -->
                        

                        
                        <!--start edit modal -->


                         
                        <div class="" tabindex="-1" id="article_edit_modal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog " role="document" style="max-width: 675px">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #00c5dc;border-radius: 4px">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color: #ffffff" >
                                            Edit
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">
                                                &times;
                                            </span>
                                        </button>
                                    </div>
                                    <form id="form_article_edit" method="post" action="<?php echo base_url().$user_directory.'portfolio/update'?>" class="m-form m-form--fit m-form--state m-form--label-align-right " enctype="multipart/form-data" >
                                        <div class="modal-body">
                                            <div class="m-form__content">
                                                <div class="m-alert m-alert--icon alert alert-warning m--hide" role="alert" id="form_article_edit_msg">
                                                    <div class="m-alert__icon">
                                                        <i class="la la-warning"></i>
                                                    </div>
                                                    <div class="m-alert__text">
                                                        Oh snap! Change a few things up and try submitting again.
                                                    </div>
                                                    <div class="m-alert__close">
                                                        <button type="button" class="close" data-close="alert" aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            </div>


                                           

 


                                           



                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <label class="col-lg-2 col-form-label">
                                                         Category En:
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-form__group">
                                                           
                                                        <select name="category" style="width: 100%;" class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill" id="cat1">
                                                           
                                                            <option selected="selected" >Select Type</option>
                                                            <?php foreach ($category as $c):
                                    
                                                                echo "<option value='".$c->cat_id."'> ".$c->cat_name."</option>";
                                                            endforeach;?>

                                                            
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <span class="m-form__help"></span>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <label class="col-lg-2 col-form-label">
                                                         Category Ar:
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-form__group">
                                                           
                                                        <select name="ar_category" style="width: 100%;" class="form-control m-bootstrap-select m-bootstrap-select--air m-bootstrap-select--pill" id="arCat1">
                                                           
                                                            <option selected="selected" >Select Type</option>
                                                            <?php foreach ($category as $a):
                                    
                                                                echo "<option value='".$a->cat_id."'> ".$a->ar."</option>";
                                                            endforeach;?>

                                                            
                                                        </select>
                                                        </div>
                                                    </div>

                                                    <span class="m-form__help"></span>
                                                </div>

                                            </div>
                                            

                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <label class="col-lg-2 col-form-label">
                                                       Title En:
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-form__group">
                                                           
                                                         <input type="text" name="title" value="<?php echo $products->title ?>" class="form-control m-input" id="title1"> 

                                                        </div>
                                                    </div>

                                                    <span class="m-form__help"></span>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <label class="col-lg-2 col-form-label">
                                                       Title Ar:
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-form__group">
                                                           
                                                         <input type="text" name="ar_title" value="<?php echo $products->ar_title ?>" class="form-control m-input" id="arTitle2"> 

                                                        </div>
                                                    </div>

                                                    <span class="m-form__help"></span>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <label class="col-lg-2 col-form-label">
                                                       En Short Description:
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-form__group">
                                                           
                                                         <!-- <input type="text" name="en_desc" class="form-control m-input" id="en_desc1">  -->
                                                         <textarea rows="8" cols="50" name="en_desc" class="form-control m-input" id="summernote_3" ><?php echo $products->en_description ?></textarea>

                                                        </div>
                                                    </div>

                                                    <span class="m-form__help"></span>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12" >
                                                    <label class="col-lg-2 col-form-label">
                                                      Ar Short Description:
                                                    </label>
                                                    <div class="col-lg-12">
                                                        <div class="form-group m-form__group">
                                                           
                                                         <!-- <input type="text" name="ar_desc" class="form-control m-input" id="ar_desc">  -->
                                                         <textarea rows="8" cols="50" name="ar_desc" class="form-control m-input" id="summernote_3"><?php echo $products->ar_description ?></textarea>

                                                        </div>
                                                    </div>

                                                    <span class="m-form__help"></span>
                                                </div>

                                            </div>
                                            
                                            <div class="row">
                                             
                                             <div class="col-lg-12" >
                                                 <label class="col-lg-2 col-form-label">
                                                     Image:
                                                 </label>
                                                 <div class="col-lg-12">
                                                     
                                                             <input  type="file" name="uploaded_file" id="img2">
                                                            

                                                     </div>
                                                 </div>

                                                 <span class="m-form__help" id=""></span>
                                             </div>
                                         </div>
                                        
                                        
                                      

                                             <input type="hidden" name="id" value="<?php echo $products->product_id ?>" id="id1">
                                            <div class="m-form__seperator m-form__seperator--dashed"></div><br/>

                                        </div>
                                       


                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary" >
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   

                        <!-- end edit modal -->

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Body -->
<?php $this->view("includes/inc_footer");?>

</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<?php $this->view("includes/inc_sidebar");?>
<!-- end::Quick Sidebar -->
<?php $this->view("includes/inc_quick_navigation");?>
<!--begin::Base Scripts -->
<?php $this->view("includes/inc_scripts");?>
<script src="<?php echo base_url() ?>template/main/plugins/bootstrap-summernote/summernote.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>template/assets/vendors/custom/DataTables/datatables.min.js"></script>
<script>
    // Menu Active
    $("#menu_projects").addClass('m-menu__item--active');
    $("#menu_p_1").addClass('m-menu__item--active');


$("#cat").select2({
  placeholder: "Select Category"
});
$("#catar").select2({
  placeholder: "Select Category"
});
$("#colle").select2({
  placeholder: "Select Collection"
});

$("#cat1").select2({
  placeholder: "Select Category"
});
$("#arCat1").select2({
  placeholder: "Select Category"
});
$("#colle1").select2({
  placeholder: "Select Collection"
});
 $("#created_date,#created_date1").datepicker( {
            todayHighlight:!0, orientation:"bottom left", templates: {
                leftArrow: '<i class="la la-angle-left"></i>', rightArrow: '<i class="la la-angle-right"></i>'
            }
        }
    );
</script>
<script>


    $('#summernote_3').summernote({height: 300});
    $('#summernote_33').summernote({height: 300});


    var encategory="<?php echo $products->product_category ?>";
   
    $('#cat1').val(encategory);
    $("#cat1").trigger("change");

    var ar_category="<?php echo $products->ar_category ?>";
   
   $('#arCat1').val(ar_category);
   $("#arCat1").trigger("change");

   
</script>
<!--begin::Page Snippets -->
<?php $this->view("custom_scripts/products_scripts");?>
<!--end::Page Snippets -->