<script src="{$path}public/dist/js/jquery-2.2.4.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{$path}public/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{$path}public/assets/js/ie10-viewport-bug-workaround.js"></script>  
    <script src="{$path}public/dist/js/jquery.watermark.js"></script>    
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>    
    <script>
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
                    url: '{$path}/san-pham/tim-kiem-san-pham.html',
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
                    url: '{$path}/khach-hang/them-gio-hang.html',
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
    </script>