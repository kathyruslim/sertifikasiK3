<div class="form-group">
    <label class="col-md-4 control-label">{{ $label }}</label>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="col-md-12">
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar" style="font-size:36px"></i>
            </div>
            <input type="text" value="{{ $value }}" name="{{ $name }}" class="form-control pull-right" required>
        </div>
    </div>
</div>