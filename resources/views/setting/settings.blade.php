@extends('layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Pengaturan</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('setting/page') }}">Pengaturan</a></li>
                            <li class="breadcrumb-item active">Pengaturan Umum</li>
                        </ul>
                    </div>
                </div>
            </div>

            

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Detail Dasar Situs Web</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form>
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Nama Situs Web <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Situs Web">
                                    </div>
                                    <div class="form-group">
                                        <p class="settings-label">Logo <span class="star-red">*</span></p>
                                        <div class="settings-btn">
                                            <input type="file" accept="image/*" name="image" id="file"
                                                onchange="loadFile(event)" class="hide-input">
                                            <label for="file" class="upload">
                                                <i class="feather-upload"></i>
                                            </label>
                                        </div>
                                        <h6 class="settings-size">Ukuran gambar yang disarankan adalah <span>150px x
                                                150px</span></h6>
                                        <div class="upload-images">
                                            <img src="{{ URL::to('assets/img/logo.png') }}" alt="Image">
                                            <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="settings-label">Favicon <span class="star-red">*</span></p>
                                        <div class="settings-btn">
                                            <input type="file" accept="image/*" name="image" id="file"
                                                onchange="loadFile(event)" class="hide-input">
                                            <label for="file" class="upload">
                                                <i class="feather-upload"></i>
                                            </label>
                                        </div>
                                        <h6 class="settings-size">
                                        Ukuran gambar yang disarankan adalah <span>16px x 16px or 32px x 32px</span>
                                        </h6>
                                        <h6 class="settings-size mt-1">Format yang diterima: hanya png dan icon</h6>
                                        <div class="upload-images upload-size">
                                            <img src="{{ URL::to('assets/img/favicon.jpeg') }}" alt="Image">
                                            <a href="javascript:void(0);" class="btn-icon logo-hide-btn">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6">
                                            <div class="form-group">
                                                <div
                                                    class="status-toggle d-flex justify-content-between align-items-center">
                                                    <p class="mb-0">RTL</p>
                                                    <input type="checkbox" id="status_1" class="check">
                                                    <label for="status_1" class="checktoggle">checkbox</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit" class="btn btn-orange">Update</button>
                                            <button type="submit" class="btn btn-grey">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Alamat Lengkap</h5>
                        </div>
                        <div class="card-body pt-0">
                            <form>
                                <div class="settings-form">
                                    <div class="form-group">
                                        <label>Jalur Alamat 1 <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukan Jalur Alamat 1">
                                    </div>
                                    <div class="form-group">
                                        <label>Jalur Alamat 2 <span class="star-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="Masukan Jalur Alamat 1 2">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kota <span class="star-red">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Provinsi <span class="star-red">*</span></label>
                                                <select class="select form-control">
                                                    <option selected="selected">-- Pilih --</option>
                                                    <option>Maluku</option>
                                                    <option>Maluku Utara</option>
                                                    <option>Riau</option>
                                                    <option>Kepulauan Riau</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kode Pos <span class="star-red">*</span></label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Negara <span class="star-red">*</span></label>
                                                <select class="select form-control">
                                                    <option selected="selected">-- Pilih --</option>
                                                    <option>Indonesia</option>
                                                    <option>Singapura</option>
                                                    <option>Prancis</option>
                                                    <option>Amerika</option>
                                                    <option>Kanada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="settings-btns">
                                            <button type="submit" class="btn btn-orange">Update</button>
                                            <button type="submit" class="btn btn-grey">Batal</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection