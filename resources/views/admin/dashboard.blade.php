@extends('layouts.includes.admin')

@section('title', 'Dashboard')
@section('content')

    <div class="header">
        <h1>Dashboard Overview</h1>
    </div>

    <div class="stats-grid">
        <div class="stat-card blue">
            <h3>Total Users</h3>
            <div class="value">2,543</div>
        </div>
        <div class="stat-card green">
            <h3>Active Customers</h3>
            <div class="value">1,847</div>
        </div>
        <div class="stat-card orange">
            <h3>Revenue</h3>
            <div class="value">$48.5K</div>
        </div>
        <div class="stat-card purple">
            <h3>Growth</h3>
            <div class="value">+24%</div>
        </div>
    </div>

    <div class="content-section">
        <h2>Recent Activity</h2>
        <p style="color: #7f8c8d;">Welcome to your admin dashboard. Select an option from the sidebar to manage
            your application.</p>
    </div>

    </div>


@endsection
