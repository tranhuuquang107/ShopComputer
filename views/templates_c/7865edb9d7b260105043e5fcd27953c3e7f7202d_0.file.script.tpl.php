<?php
/* Smarty version 3.1.29, created on 2016-06-24 16:30:37
  from "C:\xampp\htdocs\24-6doan\views\templates\layout\script.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d440d305009_16740745',
  'file_dependency' => 
  array (
    '7865edb9d7b260105043e5fcd27953c3e7f7202d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\24-6doan\\views\\templates\\layout\\script.tpl',
      1 => 1466778611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d440d305009_16740745 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/js/jquery-2.2.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="../../assets/js/vendor/jquery.min.js"><\/script>')<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>  
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/dist/js/jquery.watermark.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
>
    //6-7
        $(document).ready(function(){    

           $('input#txtGtTim').autocomplete({
              source:'search.php'
            })

            $("#btnThucHienTim").click(function(){
               var gttim=$('#txtGtTim').val();
               if(gttim!="")
               {
                     //11
                     $.ajax({
                    url: '<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/san-pham/tim-kiem-san-pham.html',
                    dataType: "json",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',    
                    data: { gt : gttim },                  // data is not json
                    async: true,
                    processData: true,                                                  //important to use it as true
                    cache: false,                    
                    success: function (data) {
                      if(data['chuoi'])
                       $('#dvMain').html(data['chuoi']); 
                      else
                        $('#dvMain').html(data['chuoi']);                                                     
                    },
                    error: function (data) {
                        alert('tim bị lỗi');
                    }
                })
                //11
               }
                });
        
            //end xu li tim kiem
            $("#btnMua").click(function(){
                var masanpham=$("#btnMua").attr('name');
                var soluong=$("#soluong").val();
                if(soluong<1)
                {
                    alert("vui long nhap so luong >0");
                    return;
                }
                
                //11
                $.ajax({
                    url: '<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/khach-hang/them-gio-hang.html',
                    dataType: "json",
                    type: "POST",
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',    
                    data: { msp : masanpham , sl : soluong  },                  // data is not json
                    async: true,
                    processData: true,                                                  //important to use it as true
                    cache: false,
                    success: function (data) {
                      $("#ttGH").html(data['tsl']+" SP ( " + formatCurrency(data['tt'])+ "vnđ)");
                      
                    },
                    error: function (data) {
                        alert('Thêm vào giỏ hàng bị lỗi');
                    }
                })
                //11
            });    
           $("#ten_san_pham").blur(function(){             
                var tensp=$("#ten_san_pham").val();                              
                if(tensp!='')                 
                   $("#ten_san_pham_url").val(bodau(tensp));                
               });   
        });
        
        //Định dạng số
    function formatCurrency(num) 
    {
       num = num.toString().replace(/\$|\,/g,'');
       if(isNaN(num))
       num = "0";
       sign = (num == (num = Math.abs(num)));
       num = Math.floor(num*100+0.50000000001);
       num = Math.floor(num/100).toString();
       for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
       num = num.substring(0,num.length-(4*i+3))+','+
       num.substring(num.length-(4*i+3));
       return (((sign)?'':'-') + num);
    }
    function bodau(str){
              str= str.toLowerCase();
              str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
              str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
              str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
              str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
              str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
              str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
              str= str.replace(/đ/g,"d");
              str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
              str= str.replace(/-+-/g,"-");
              str= str.replace(/^\-+|\-+$/g,"");
              return str;
              }
    //6-7
    <?php echo '</script'; ?>
><?php }
}
