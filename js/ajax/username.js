define('ajax/username', function(require, exports, module){
    exports.check = function(){
        nickname= $("#nickname").val();
        var data={
            nickname:$("#nickname").val()
        }
        $.ajax({
            type: "POST",
            cache: false,
            url: "/ajax/refactorUserInfo.php?action=editName",
            contentType: "application/x-www-form-urlencoded",
            data:data,
            success:function(data){
                data=JSON.parse(data);
                 if(data.resultStatus == 200){
                     //alert("修改成功!");
                     $(".center-name").text(nickname);
                     $(".a-myname").show();
                     $(".c-myname").hide();
                }else{
                     alert(data.errorMessage);
                }
            }
        });
    };
    $(".center-edit").click(function(){
        $(".a-myname").hide();
        $(".c-myname").show();
    });
    $(".c-myname #cancel").on("click",function(){

        $(".a-myname").show();
        $(".c-myname").hide();
    })
    $(".c-funds-dh").on("click",function(){
        $(".zhezhao").show();
        $(".duikdou").show();
    })
    $(".dui-cancel").on("click",function(){
        $(".zhezhao").hide();
        $(".duikdou").hide();
    })
    $(".dui-queren").on("click",function(){
        var dou=$("#duiv").val() || null;
        if(dou != null && dou !== ""){
            $.ajax({
                type: "POST",
                cache: false,
                url: "/rest/usersGiftDetails/exchange.mt?userId=27079&xcoins=100",
                data:JSON.stringify(""),
                contentType:"application/json; charset=utf-8",
                success:function(data){
                    data=JSON.parse(data);
                    if(data.resultStatus == 200){
                        //alert("修改成功!");
                        $(".center-name").text(nickname);
                        $(".a-myname").show();
                        $(".c-myname").hide();
                    }else{
                        alert(data.errorMessage);
                    }
                }
            });
        }
        alert(dou);

    })


});
