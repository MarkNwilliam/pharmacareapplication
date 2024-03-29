<div class="row">
    <div class="col-md-12 col-md-12">
        <div class="card ">
            <div class="card-header py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fs-17 font-weight-600 mb-0"><?php echo lan('salary_sheet')?></h6>

                                </div>
                                <div class="text-right">
                                     <?php if($permission->method('salary_generate','create')->access()){?>
                                   <a href="<?php echo base_url('payroll/salary_generate')?>" class="btn btn-success btn-sm mr-1"><i class="fas fa-plus mr-1"></i><?php echo lan('salary_generate')?></a>
                               <?php }?>
                                 
                                </div>
                            </div>
                        </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table display table-bordered table-striped table-hover custom-table" cellspacing="0" width="100%" id="SalarySheet">
                        <thead>
                            <tr>
                        <th><?php echo lan('sl_no') ?></th>
                        <th><?php echo lan('month_of_salary') ?></th>
                        <th><?php echo lan('date') ?></th>
                        <th><?php echo lan('generated_by') ?></th>
                        <th><?php echo lan('action') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                          
                          
                        </tbody>
                         
                    </table>
                    
                </div>
            </div> 
        </div>
    </div>
</div>

 