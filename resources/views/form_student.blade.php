
<!DOCTYPE html>
<html>
@include('head');
<body>

<div class="container col-lg-6">
    <h1>Form Student</h1>
    <h2 id="notification"></h2>

    <form action="{{url('/postFeedback')}}" method="post" id="feedback">
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
        <div class="form-group">
            <label for="feedback">Example textarea</label>
            <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
        </div>
    </div>
    <div class="modal-footer">
        <button id="submitBtn" type="button" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>

    <script src="{{ asset("js/jquery.js") }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#feedback').submit((e) => {
            e.preventDefault();
            $.ajax({
                type:"POST",
                url: $("#feedback").attr("action"),
                data: $("#feedback").serialize(),
                dataType: "json",
                success: (res) => {
                    $("#notification").html(res.message);
                }
            });
        });
    });
</script>

</body>
</html>