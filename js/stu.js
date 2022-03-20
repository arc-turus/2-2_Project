$(document).ready(function(){
    reg_stu();
    view_stu();
    get_stu();
    updateStu();
})
    



//register stu
function reg_stu(){
    $(document).on('click','#btn_stureg', function(){
        var stuname = $('#stuName').val();
        var stuemail = $('#stuEmail').val();
        var stureg = $('#stuReg').val();
        var stumob = $('#stuMob').val();
        var studept = $('#stuDept').val();
        var stubatch= $('#stuBatch').val();
        var sturoom = $('#stuRoom').val();
       if(stuname==""||stuemail==""||stureg==""||stumob==""||studept==""||stubatch==""||sturoom==""){
           $("#stu_reg_message").html('<div class="alert alert-danger" role="alert">Please fill up the blanks!</div>');
           $('#modal_registerStu').trigger('reset');
       }else{
           $.ajax({
               url: 'stu_register.php',
               method : 'post',
               data: {
                    stuname:stuname,stuemail: stuemail, stureg:stureg, stumob: stumob, studept:studept, stubatch:stubatch, sturoom: sturoom
               },
               success: function(data){
                   $("#stu_reg_message").html(data);
                   $('#modal_registerStu').modal('show');
                   $('#modal_registerStu').trigger('reset');
                   view_stu();
               }
           })
       }
    })

    $(document).on('click', '#btn_stureg_close', function(){
        $('form').trigger('reset');
        $('#stu_reg_message').html('');

    })

}

//to display

function view_stu(){
    $.ajax({
        url: 'stu_view.php',
        method: 'post',
        success:function(data){
        data= $.parseJSON(data);
        if(data.status == 'success'){
            $('#stu_view_table').html(data.html);
        }
        }

    })
}

//get particular record
function get_stu(){
    $(document).on('click','#btn_stu_edit',function(){
        var id=$(this).attr('data-id');
        $.ajax({
            url: 'get_stu.php',
            method: 'post',
            data:{
                iid:id
            },
            dataType: 'JSON',
            success: function(data){
                console.log(data[1]);
                $('#upstuId').val(data[0]);
                $('#upstuName').val(data[1]);
                $('#upstuEmail').val(data[2]);
                $('#upstuMob').val(data[3]);
                $('#upstuDept').val(data[4]);
                $('#upstuBatch').val(data[5]);
                $('#upstuReg').val(data[6]);
                $('#upstuRoom').val(data[7]);
                $('#modal_updateStu').modal('show');
             
            }
        })
    })
}

//update
function updateStu(){
    var stuname = $('#upstuName').val();
    var stuemail = $('#upstuEmail').val();
    var stureg = $('#upstuReg').val();
    var stumob = $('#upstuMob').val();
    var studept = $('#upstuDept').val();
    var stubatch = $('#upstuBatch').val();
    var sturoom = $('#upstuRoom').val();
    var stuid = $('#upstuId').val();
    // var stu = $('#upstu').val();
    $(document).on('click','#btn_stuup',function(){
        console.log('working');
    })
}