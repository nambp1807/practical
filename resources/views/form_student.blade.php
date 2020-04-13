
<!DOCTYPE html>
<html>
@include('head');
<body>

<div class="container col-lg-6">
    <h1>Form Student</h1>
<form action="#" method="post">
    @csrf
    <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="name" name="name" class="form-control" placeholder="name"/>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="email"/>
        </div>
        <div class="form-group">
            <label>Telephone</label>
            <input type="tel" name="telephone" class="form-control" placeholder="telephone"/>
        </div>
    </div>
    <div class="modal-footer">
        <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
<script type="text/javascript">
    $("#submitBtn").bind("click",function () {
        $.ajax({
            url: "{{url("postLogin")}}",
            method: "POST",
            data: {
                _token: $("input[name=_token]").val(),
                email: $("input[name=email]").val(),
                password: $("input[name=password]").val(),
            },
            success: function (res) {
                if(res.status){
                    location.reload();
                }else{
                    alert(res.message);
                }
            }
        });
    });
</script>
</body>
</html>