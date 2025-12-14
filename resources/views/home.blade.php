@extends('layouts.admin')

@section('title', 'Dashboard')

@section('styles')
<style>
    /* Stats Cards */
    .stats-row {
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: transform 0.3s, box-shadow 0.3s;
        border: none;
        height: 100%;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 20px rgba(0,0,0,0.15);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        margin-bottom: 15px;
    }

    .stat-icon.purple {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .stat-icon.blue {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
    }

    .stat-icon.green {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
    }

    .stat-icon.orange {
        background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        color: white;
    }

    .stat-label {
        font-size: 13px;
        color: #718096;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }

    .stat-value {
        font-size: 32px;
        font-weight: 700;
        color: #2d3748;
        margin: 0;
    }

    .stat-change {
        font-size: 13px;
        margin-top: 8px;
    }

    .stat-change.up {
        color: #48bb78;
    }

    .stat-change.down {
        color: #f56565;
    }

    /* Alert Success */
    .alert-success {
        border: none;
        border-radius: 10px;
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
        padding: 15px 20px;
        font-weight: 500;
    }

    /* Quick Action Buttons */
    .btn-quick-action {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        border: none;
        border-radius: 10px;
        padding: 12px;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-quick-action:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-outline-quick {
        border: 2px solid #667eea;
        border-radius: 10px;
        padding: 12px;
        color: #667eea;
        font-weight: 600;
        background: white;
        transition: all 0.3s;
    }

    .btn-outline-quick:hover {
        background: #667eea;
        color: white;
        transform: translateY(-2px);
    }

    /* Table Styles */
    .table {
        border-collapse: separate;
        border-spacing: 0;
    }

    .table thead th {
        background: #f8f9fa;
        border: none;
        padding: 15px;
        font-weight: 600;
        color: #2d3748;
        font-size: 14px;
    }

    .table tbody td {
        padding: 15px;
        border-top: 1px solid #e2e8f0;
        font-size: 14px;
        color: #4a5568;
    }

    .table tbody tr:hover {
        background: #f8f9fa;
    }

    @media (max-width: 768px) {
        .stat-value {
            font-size: 24px;
        }
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="page-header">
    <h2>Dashboard</h2>
    <p>Welcome back! Here's what's happening today.</p>
</div>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<!-- Stats Cards -->
<div class="row stats-row">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-card">
            <div class="stat-icon purple">
                <span>👥</span>
            </div>
            <div class="stat-label">Total Patients</div>
            <h3 class="stat-value">1,234</h3>
            <div class="stat-change up">
                <span>↑ 12% from last month</span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-card">
            <div class="stat-icon blue">
                <span>📅</span>
            </div>
            <div class="stat-label">Appointments Today</div>
            <h3 class="stat-value">24</h3>
            <div class="stat-change up">
                <span>↑ 8% from yesterday</span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-card">
            <div class="stat-icon green">
                <span>✓</span>
            </div>
            <div class="stat-label">Completed</div>
            <h3 class="stat-value">892</h3>
            <div class="stat-change up">
                <span>↑ 15% from last week</span>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <div class="stat-card">
            <div class="stat-icon orange">
                <span>⏰</span>
            </div>
            <div class="stat-label">Pending</div>
            <h3 class="stat-value">48</h3>
            <div class="stat-change down">
                <span>↓ 5% from last week</span>
            </div>
        </div>
    </div>
</div>

<!-- Content Cards -->
<div class="row">
    <div class="col-lg-8 mb-4">
        <div class="content-card">
            <h5>Recent Activity</h5>
            <p class="text-muted">Your recent patient interactions and updates.</p>

            <div class="table-responsive mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Patient</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>John Doe</strong></td>
                            <td>Checkup</td>
                            <td>Today, 10:30 AM</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td><strong>Jane Smith</strong></td>
                            <td>Treatment</td>
                            <td>Today, 2:00 PM</td>
                            <td><span class="badge bg-warning text-dark">Scheduled</span></td>
                        </tr>
                        <tr>
                            <td><strong>Mike Johnson</strong></td>
                            <td>Follow-up</td>
                            <td>Tomorrow, 9:00 AM</td>
                            <td><span class="badge bg-info">Upcoming</span></td>
                        </tr>
                        <tr>
                            <td><strong>Sarah Williams</strong></td>
                            <td>Consultation</td>
                            <td>Yesterday, 3:00 PM</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td><strong>David Brown</strong></td>
                            <td>Lab Test</td>
                            <td>Today, 4:30 PM</td>
                            <td><span class="badge bg-primary">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="content-card">
            <h5>Quick Actions</h5>
            <div class="d-grid gap-3 mt-4">
                <button class="btn btn-quick-action">
                    ➕ Add New Patient
                </button>
                <button class="btn btn-outline-quick">
                    📅 Schedule Appointment
                </button>
                <button class="btn btn-outline-quick">
                    📊 View Reports
                </button>
                <button class="btn btn-outline-quick">
                    💉 Record Treatment
                </button>
            </div>

            <div class="mt-4 pt-4" style="border-top: 1px solid #e2e8f0;">
                <h6 class="mb-3" style="font-weight: 600; color: #2d3748;">System Stats</h6>
                <div class="mb-3">
                    <div class="d-flex justify-content-between mb-1">
                        <small class="text-muted">Storage Used</small>
                        <small class="text-muted">68%</small>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar" role="progressbar" style="width: 68%; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between mb-1">
                        <small class="text-muted">Active Users</small>
                        <small class="text-muted">42/50</small>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
