<div class="page">
    <div class="side-bar">
        <div class="title-app">
            <h1 class="txt-title">SILONBOG</h1>
            <h5 class="txt-subtitle">Sistem Layanan Onlin Biro Organisasi</h5>
        </div>
        <div class="list">
            <div class="list-item">
                <a href="#">
                    <i class="bi bi-envelope-fill"></i>
                    <span class="item">Surat Masuk</span>
                </a>
            </div>
            <div class="list-item">
                <a href="#">
                    <i class="bi bi-check-circle-fill"></i>
                    <span class="item">Disposisi</span>
                </a>
            </div>
            <div class="list-item">
                <a href="#">
                    <i class="bi bi-archive-fill"></i>
                    <span class="item">Arsip Surat</span>
                </a>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="header">
            <div class="profile">
                <i class="bi bi-envelope position-relative">
                    <span class="position-absolute top-60 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px; margin-top: 20px">
                        99+
                    </span>
                </i>
                <i class="bi bi-person-circle me-3 ms-4"></i>
                <h5 style="width: 100px;">Dinas Kesehatan</h5>
            </div>
        </div>
        <div class="content1">
            <form class="d-flex flex-row col-12 mx-auto">
                <div class="content-list col-2">
                    <label for="exampleDataList" class="form-label">Cari Surat</label>
                    <input class="form-control form-control-lg me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <div class="content-list col-2">
                    <label for="exampleDataList" class="form-label">Prov, Kab/Kot</label>
                    <select class="form-select form-select-lg" aria-label="Default select example">
                        <option value="1">Provinsi</option>
                        <option value="2">Kab/Kota</option>
                    </select>
                </div>
                <div class="content-list d-grid col-2">
                    <label for="exampleDataList" class="form-label">Divisi</label>
                    <select class="form-select form-select-lg" aria-label="Default select example">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="content2">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Pingirim</th>
                            <th scope="col">Judul Surat</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Dinas Pendidikan</td>
                            <td>Permohonan penugasan guru asdfasdfasdfasdfadsf asdfasdfasd asdfasdfdas</td>
                            <td>@12.20 AM</td>
                        </tr>
                        <tr>
                            <td scope="row">Dinas Perdagangan</td>
                            <td>Permohonan penugasan guru</td>
                            <td>@12.20 AM</td>
                        </tr>
                        <tr>
                            <td scope="row">Dinas Sosial</td>
                            <td>Permohonan penugasan guru</td>
                            <td>@12.20 AM</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0;
    }

    .page {
        display: flex;
        min-height: 100vh;
    }

    .side-bar {
        /* display: flex; */
        background-color: #EB6D6D;
        width: 400px;
        padding-left: 26px;
        padding-right: 26px;
        padding-top: 50px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
    }

    .side-bar a {
        text-decoration: none;
        color: #000;
        display: flex;
        align-items: center;
        box-sizing: border-box;
    }

    .side-bar .title-app .txt-title {
        font-weight: 700;
        font-size: 50px;
        line-height: 75px;
        color: #000000;
    }

    .side-bar .title-app .txt-subtitle {
        font-weight: 500;
        font-size: 18px;
        line-height: 27px;
        color: #FFFFFF;
    }

    .side-bar .list {
        display: flex;
        flex-direction: column;
        margin-top: 100px;
        box-sizing: border-box;
        background-color: #DFDFDF;
        border-radius: 8px;
    }

    .side-bar .list .list-item {
        display: flex;
        align-items: center;
        padding: 12px 10px;
        border-radius: 8px;
        flex-grow: 1;
        height: 65px;
        box-sizing: border-box;
        transition: all ease-in .2s;
    }

    .side-bar .list .list-item:hover {
        background: #36F917;
        transition: all ease-in .2s;

    }

    .side-bar .list .list-item .bi {
        font-size: 40px;
    }

    .side-bar .list .list-item .item {
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
        color: #000000;
        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        margin-left: 22px;
    }

    .main-content {
        display: flex;
        flex-grow: 1;
        flex-direction: column;
    }

    .main-content .header {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        padding: 40px 40px 40px 0px;
        box-sizing: border-box;
    }

    .main-content .header .profile {
        display: flex;
        /* flex: 1;
        justify-content: flex-end; */
        align-items: center;
    }

    .main-content .header .profile .bi {
        font-size: 50px;
    }

    .main-content .content1 {
        display: flex;
        padding-left: 50px;
        padding-top: 65px;
        box-sizing: border-box;
    }

    .main-content form {
        display: flex;
        box-sizing: border-box;
    }

    .main-content .content1 .content-list {
        display: flex;
        flex-direction: column;
        margin-right: 20px;
        box-sizing: border-box;
    }

    .main-content .d-flex .content-list label {
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
        color: #000000;
    }

    .main-content .content2 .table-responsive .table tbody tr:hover {
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .main-content .content2 .table-responsive .table thead {

        border-radius: 20px !important;
        box-sizing: border-box;
    }

    .main-content .content2 {
        padding-left: 50px;
        padding-right: 50px;
        padding-top: 30px;
        box-sizing: border-box;
    }
</style>