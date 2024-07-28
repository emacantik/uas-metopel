
@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-sub-header">
                            <h3 class="page-title">Welcome Ode Erma Rafika</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Halaman</a></li>
                                <li class="breadcrumb-item active">Siswa</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Semua Kursus</h6>
                                    <h3>04/06</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{ URL::to('assets/img/icons/teacher-icon-01.svg') }}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Semua Proyek</h6>
                                    <h3>40/60</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{URL::to('assets/img/icons/teacher-icon-02.svg')}}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Tes Dihadiri</h6>
                                    <h3>30/50</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{URL::to('assets/img/icons/student-icon-01.svg')}}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12 d-flex">
                    <div class="card bg-comman w-100">
                        <div class="card-body">
                            <div class="db-widgets d-flex justify-content-between align-items-center">
                                <div class="db-info">
                                    <h6>Tes Lulus</h6>
                                    <h3>15/20</h3>
                                </div>
                                <div class="db-icon">
                                    <img src="{{URL::to('assets/img/icons/student-icon-02.svg')}}" alt="Dashboard Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 col-xl-8">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="card-title">Pelajaran hari ini</h5>
                                </div>
                                <div class="col-6">
                                    <ul class="chart-list-out">
                                        <li>
                                            <span class="circle-blue"></span>
                                            <span class="circle-gray"></span>
                                            <span class="circle-gray"></span>
                                        </li>
                                        <li class="lesson-view-all"><a href="#">Lihat semua</a></li>
                                        <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dash-circle">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 dash-widget1">
                                    <div class="circle-bar circle-bar2">
                                        <div class="circle-graph2" data-percent="80">
                                            <b>80%</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="dash-details">
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-01.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Kelas</h5>
                                                <h4>Metodologi Penelitian</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-02.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Pelajaran</h5>
                                                <h4>5 Pelajaran</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-03.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Waktu</h5>
                                                <h4>Pelajaran</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="dash-details">
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-04.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Penugasan</h5>
                                                <h4>5 Tugas</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-05.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Staf</h5>
                                                <h4>Ode Erma Rafika</h4>
                                            </div>
                                        </div>
                                        <div class="lesson-activity">
                                            <div class="lesson-imgs">
                                                <img src="{{URL::to('assets/img/icons/lesson-icon-06.svg')}}" alt="">
                                            </div>
                                            <div class="views-lesson">
                                                <h5>Pelajaran yang Dipetik</h5>
                                                <h4>10/50</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 d-flex align-items-center justify-content-center">
                                    <div class="skip-group">
                                        <button type="submit" class="btn btn-info skip-btn">Melewati</button>
                                        <button type="submit" class="btn btn-info continue-btn">Melanjutkan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <h5 class="card-title">Aktivitas Pembelajaran</h5>
                                        </div>
                                        <div class="col-6">
                                            <ul class="chart-list-out">
                                                <li><span class="circle-blue"></span>Pengajar</li>
                                                <li><span class="circle-green"></span>Siswa</li>
                                                <li class="star-menus"><a href="javascript:;"><i
                                                            class="fas fa-ellipsis-v"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="apexcharts-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-xl-12 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header d-flex align-items-center">
                                    <h5 class="card-title">Histori Pengajaran</h5>
                                    <ul class="chart-list-out student-ellips">
                                        <li class="star-menus"><a href="javascript:;"><i
                                                    class="fas fa-ellipsis-v"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="teaching-card">
                                        <ul class="steps-history">
                                            <li>Juni22</li>
                                            <li>Juni23</li>
                                            <li>Juni24</li>
                                        </ul>
                                        <ul class="activity-feed">
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>Metodologi Penelitian</a></span>
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>Juni 5,
                                                            2022</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 - 10:00 am (60
                                                            Menit)</li>
                                                    </ul>
                                                </div>
                                                <div class="activity-btns ms-auto">
                                                    <button type="submit" class="btn btn-info">Sedang Berlangsung</button>
                                                </div>
                                                <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>Pemrograman Framework </a></span>
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>Juli 29,
                                                            2024</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 (60
                                                            Menit)</li>
                                                    </ul>
                                                </div>
                                                <div class="activity-btns ms-auto">
                                                    <button type="submit" class="btn btn-info">Telah Berakhir</button>
                                                </div>
                                            </li>
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity">
                                                    <span class="feed-text1"><a>Pemrograman Java Lanjut</a></span>
                                                    <ul class="teacher-date-list">
                                                        <li><i class="fas fa-calendar-alt me-2"></i>Juli 29,
                                                            2024</li>
                                                        <li>|</li>
                                                        <li><i class="fas fa-clock me-2"></i>09:00 am - 10:00 (60
                                                            Menit)</li>
                                                    </ul>
                                                </div>
                                                <div class="activity-btns ms-auto">
                                                    <button type="submit" class="btn btn-info">Sedang Belangsung</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-xl-4 d-flex">
                    <div class="card flex-fill comman-shadow">
                        <div class="card-body">
                            <div id="calendar-doctor" class="calendar-container"></div>
                            <div class="calendar-info calendar-info1">
                                <div class="up-come-header">
                                    <h2>Acara Mendatang</h2>
                                    <span><a href="javascript:;"><i class="feather-plus"></i></a></span>
                                </div>
                                <div class="upcome-event-date">
                                    <h3>30 Juli</h3>
                                    <span><i class="fas fa-ellipsis-h"></i></span>
                                </div>
                                <div class="calendar-details">
                                    <p>08:00 WIT</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Metodologi Penelitian</h4>
                                            <h5>A002</h5>
                                        </div>
                                        <span>08:00 - 09:00 WIT</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>09:00 WIT</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Pemrograman Framework</h4>
                                            <h5>B002</h5>
                                        </div>
                                        <span>09:00 - 11:00 WIT</span>
                                    </div>
                                </div>
                                <div class="calendar-details">
                                    <p>10:00 WIT</p>
                                    <div class="calendar-box normal-bg">
                                        <div class="calandar-event-name">
                                            <h4>Pemrograman Java Lanjut</h4>
                                            <h5>A003</h5>
                                        </div>
                                        <span>10:00 - 12:30 WIT</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
