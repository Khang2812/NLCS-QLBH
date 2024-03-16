<?php
    include "../view/header.php"
?>

<div>
    <div style="text-align: center;padding-top:20px">
        <h2>Liên hệ bằng Email</h2>
        <p>Vui lòng cung cấp thông tin theo yêu cầu</p>
    </div>

    <form class="row g-3 needs-validation" novalidate style="padding-left:100px;padding-right:100px">
        <div class="col-12 position-relative">
            <label for="validationTooltip01" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="">
            <div class="valid-tooltip">
                Xin hãy nhập họ và tên!
            </div>
        </div>

        <div class="col-md-6">
            <label for="#" class="form-label">Email</label>
            <input type="email" class="form-control" id="#">
        </div>

        <div class="col-md-6">
            <label for="#" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="#" placeholder="">
        </div>

        <div class="col-md-12">
            <label for="#" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="#" placeholder="">
        </div>

        <div class="col-12">
            <label for="#" class="form-label">Số seri</label>
            <input type="text" class="form-control" id="#" placeholder="">
        </div>

        <div class="col-12">
            <textarea maxlength="" placeholder=" Mô tả vấn đề" aria-label="Mô tả" type="text"
                class="textarea-field bigger" style="width:100%;height:150px"></textarea>
        </div>

        <div class="col-12">
            <div class="upload-file-wrapper">
                <div class="upload-file-title">Tải tập tin lên</div>
                <!---->
                <div class="upload-file-box"><button aria-label=" + Bổ sung Tập tin" type="button"
                        class="default-button-wrapper button-border-blue btn-primary btn-lg"><span>+ Bổ sung Tập
                            tin</span>
                        <!---->
                    </button></div>
                <div class="upload-file-rules">
                    Định dạng tập tin: jpg, png, gif, doc, docx, xls, xlsx, txt, pdf, avi, flv, wmv, mov, mp4 kích
                    thước: 20M Bytes
                    <br>Giới hạn tập tin đính kèm là 5
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Tôi đồng ý cung cấp thông tin.
                </label>
            </div>
        </div>

        <div class="col-12" style="text-align:center">
            <button type="submit" class="btn btn-primary btn-lg">Gửi</button>
        </div>

    </form>
</div>



<?php
    include "../view/footer.php"
?>