@extends('layouts.master')

@section('content')
    <section class="section_banner" id="section_banner" style="margin-top: 121px;">

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
                            Choose a sidebar option
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('all_inquiries') }}">All inquiries</a>
                    </li>
                    <li>
                        <a href="{{ route('user_inquiries') }}">{{ Auth::user()->name }}'s Inquiries</a>
                    </li>
                    <li>
                        <a href="{{ route('grouped_inquiries') }}">Number of inquiries by person</a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}">All users</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Simple Sidebar</h1>
                            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->


    </section>
@endsection