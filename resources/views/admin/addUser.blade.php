@include('layouts.head')
<div class="row d-flex justify-content-end">
    <div class="">
        @include('layouts.sidebar')
    </div>
    <div class="col-10">
        <h3>Thêm thông tin bệnh nhân</h3>
        <div class="add-user" style="width: 1300px; margin: 30px auto 0px;
        outline: 1px solid #dadada; border-radius: 10px;
        padding: 10px">
            <div class="row">
                <div class="col-6">
                    <div class="form-outline">
                        <input type="text" id="form12" class="form-control" />
                        <label class="form-label" for="form12">Tên bệnh nhân</label>
                    </div>
                    <div class="form-outline">
                        <input type="text" id="form12" class="form-control" />
                        <label class="form-label" for="form12">Địa chỉ</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                        <label class="form-check-label" for="flexRadioDefault1"> Nam </label>
                    </div>

                    <!-- Default checked radio -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked/>
                        <label class="form-check-label" for="flexRadioDefault2"> Nữ</label>
                    </div>
                    <div class="form-outline">
                        <input type="text" id="form12" class="form-control" />
                        <label class="form-label" for="form12">Số điện thoại</label>
                    </div>
                    <div class="form-outline">
                        <input type="text" id="form12" class="form-control" />
                        <label class="form-label" for="form12">Email</label>
                    </div>
                </div>
                 <div class="col-6">
                     <div class="form-outline">
                         <input type="text" id="form12" class="form-control" />
                         <label class="form-label" for="form12">Ngày sinh</label>
                     </div>
                     <div class="form-outline">
                         <input type="text" id="form12" class="form-control" />
                         <label class="form-label" for="form12">Ngày khám</label>
                     </div>
                     <div class="form-outline">
                         <input type="text" id="form12" class="form-control" />
                         <label class="form-label" for="form12">Số thẻ bảo hiểm y tế</label>
                     </div>
                     <div class="form-outline">
                         <input type="text" id="form12" class="form-control" />
                         <label class="form-label" for="form12">Nghe nghiêp</label>
                     </div>
                 </div>
            </div>
            <div style="border-top: 1px solid #dadada">
                <h4>Thông tin khám sàng lọc</h4>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung bệnh</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nội dung thuốc</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ghi chú</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-primary"> <i class="fas fa-save"></i>Lưu lại</button>
            </div>
        </div>
    </div>
</div>
<style>
    .form-outline {
        margin-bottom: 30px;
    }

</style>

@include('layouts.footer')
