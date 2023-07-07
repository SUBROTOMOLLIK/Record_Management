<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading"></div>
                <a class="nav-link" href="{{route('admin.home')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{route('admin.catalog.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Catalog Registar
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    All Applications
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.SDcoument.index')}}">Search App</a>
                        <a class="nav-link" href="{{route('admin.QPDcoument.index')}}">Inspaction App</a>
                        <a class="nav-link" href="{{route('admin.DDcoument.index')}}">Duplicate App</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLay" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    All Schedule
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLay" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.suchione.index')}}">Schedule No One</a>
                        <a class="nav-link" href="{{route('admin.suchitwo.index')}}"> Schedule No Two</a>
                        <a class="nav-link" href="{{route('admin.suchithree.index')}}">Schedule No Three</a>
                        <a class="nav-link" href="{{route('admin.suchifour.index')}}">Schedule No Four</a>
                    </nav>
                </div>

                <a class="nav-link" href="{{route('admin.deednotice.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Add Notice
                </a>
                <a class="nav-link" href="{{route('admin.document.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Add Document
                </a>
                <a class="nav-link" href="{{route('admin.office.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Add Office Name
                </a>
                <a class="nav-link" href="{{route('admin.saroknumber.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Add Bohi No
                </a>

                <a class="nav-link" href="{{route('DeedCopyTypes')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    All Deed Copyes
                </a>

                <a class="nav-link" href="{{route('subadmin')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Add SubAdmin
                </a>

                <a class="nav-link" href="{{route('userlist')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    All Users
                </a>

                <div class="sb-sidenav-menu-heading">Backend Interface</div>

                <a class="nav-link" href="{{route('admin.year.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Add Year
                </a>

                <a class="nav-link" href="{{route('admin.searchRelation.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Search Deed Relation
                </a>
                <a class="nav-link" href="{{route('admin.donar.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Donar Details
                </a>
                <a class="nav-link" href="{{route('admin.reciver.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Reciver Details
                </a>
                <a class="nav-link" href="{{route('admin.deed.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Deed Details
                </a>
                <a class="nav-link" href="{{route('admin.uncopied.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Uncopied Deed Details
                </a>
                <a class="nav-link" href="{{route('admin.delivery.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Delivery Deed Details
                </a>
                <a class="nav-link" href="{{route('admin.store.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Store Details
                </a>



                <div class="sb-sidenav-menu-heading">Addons</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Address
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.division.index')}}">Division</a>
                        <a class="nav-link" href="{{route('admin.district.index')}}">District</a>
                        <a class="nav-link" href="{{route('admin.thana.index')}}">Thana</a>
                        <a class="nav-link" href="{{route('admin.union.index')}}">Union</a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Admin
        </div>
    </nav>
</div>
