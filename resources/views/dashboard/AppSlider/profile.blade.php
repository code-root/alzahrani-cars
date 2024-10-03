@extends('dashboard.layouts.footer')
@extends('dashboard.layouts.navbar')
@section('body')


    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">User / View /</span> Account
            </h4>
            <div class="row">
                <!-- User Sidebar -->
                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                    <!-- User Card -->
                    <h3>{{ $user->nickname }}</h3>

                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <img class="img-fluid rounded my-4"
                                        @if ($isSvg) src="{{ $user->avatar }}"
            @else
                src="https://almashreqebookstore.com/storage/app/public/{{ $user->avatar }}" @endif
                                        height="110" width="110" alt="User avatar" />
                                    <div class="user-info text-center">
                                        <h4 class="mb-2">{{ $user->nickname }}</h4>
                                        <span class="badge bg-label-secondary">Author</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                                <div class="d-flex align-items-start me-4 mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i
                                            class='bx bx-check bx-sm'></i></span>
                                    <div>
                                        <h5 class="mb-0">1.23k</h5>
                                        <span>Email</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mt-3 gap-3">
                                    <span class="badge bg-label-primary p-2 rounded"><i
                                            class='bx bx-customize bx-sm'></i></span>
                                    <div>
                                        <h5 class="mb-0">568</h5>
                                        <span>Projects Done</span>
                                    </div>
                                </div>
                            </div>


                            <h5 class="pb-2 border-bottom mb-4">Details</h5>
                            <div class="info-container">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">nickname:</span>
                                        <span>{{ $user->nickname }}</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Email:</span>
                                        <span>{{ $user->email }}</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Gender:</span>
                                        <span class="badge bg-label-success">{{ $user->gender }}</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Height/Weight:</span>
                                        <span>{{ $user->height }} cm / {{ $user->weight }} kg</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Phone Number:</span>
                                        <span>{{ $user->phone_number }}</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Nationality:</span>
                                        <span>{{ $user->nationality }}</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Country of Residence:</span>
                                        <span>{{ $user->country_of_residence }}</span>
                                    </li>
                                    <li class="mb-3">
                                        <span class="fw-medium me-2">Job Title:</span>
                                        <span>{{ $user->job_title }}</span>
                                    </li>
                                </ul>
                                <p><strong>Education:</strong> {{ $user->education }}</p>
                                <p><strong>About Me:</strong> {{ $user->about_me }}</p>
                                <p><strong>Life Partner:</strong> {{ $user->life_partner }}</p>
                                <p><strong>Marriage Status:</strong> {{ $user->marriage_status_id }}</p>
                                <p><strong>Marriage Type:</strong> {{ $user->marriage_type_id }}</p>
                                <p><strong>Visit Count:</strong> {{ $user->visit_count }}</p>
                                <p><strong>Created At:</strong> {{ $user->created_at }}</p>
                                <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
                                <div class="d-flex justify-content-center pt-3">
                                    <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                        data-bs-toggle="modal">Edit</a>
                                    <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /User Card -->
                    <!-- Plan Card -->
                    @if ($package != null)
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                    <span class="badge bg-label-primary"
                                        title="{{ $package['name_ar'] }}">{{ $package['name_en'] }}</span>
                                    <div class="d-flex justify-content-center">
                                        <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>
                                        <h1 class="display-5 mb-0 text-primary">{{ $package['total_amount'] }}</h1>
                                        <sub class="fs-6 pricing-duration mt-auto mb-3">/month</sub>
                                    </div>
                                </div>
                                <ul class="ps-3 g-2 my-4">
                                    <li class="mb-2">Purchase Date {{ $package['purchase_date'] }}</li>
                                    <li class="mb-2">expiry Date {{ $package['expiry_date'] }}</li>
                                </ul>
                                @php

                                    // Replace these values with your actual purchase_date and expiry_date
                                    $purchaseDate = $package['purchase_date'];
                                    $expiryDate = $package['expiry_date'];

                                    // Calculate remaining days
                                    $today = now();
                                    $expiryDate = \Carbon\Carbon::parse($expiryDate);
                                    $remainingDays = $expiryDate->diffInDays($today);

                                    // Calculate progress percentage (example: 65%)
                                    $totalDays = $expiryDate->diffInDays($purchaseDate);
                                    $progressPercentage = ($remainingDays / $totalDays) * 100;
                                @endphp

                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <span>Days</span>
                                    <span>{{ round($progressPercentage, 2) }}% Completed</span>
                                </div>
                                <div class="progress mb-1" style="height: 8px;">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $progressPercentage }}%;"
                                        aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <span>{{ $remainingDays }} days remaining</span>
                                <div class="d-grid w-100 mt-4 pt-2">
                                    <button class="btn btn-primary" data-bs-target="#upgradePlanModal"
                                        data-bs-toggle="modal">Upgrade Plan</button>
                                </div>

                            </div>
                        </div>
                    @endif

                    <!-- /Plan Card -->
                </div>
                <!--/ User Sidebar -->


                <!-- User Content -->
                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                    <!-- User Pills -->
                    <ul class="nav nav-pills flex-column flex-md-row mb-3">
                        <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i
                                    class="bx bx-user me-1"></i>Account</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-security.html"><i
                                    class="bx bx-lock-alt me-1"></i>Security</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-billing.html"><i
                                    class="bx bx-detail me-1"></i>Billing & Plans</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-notifications.html"><i
                                    class="bx bx-bell me-1"></i>Notifications</a></li>
                        <li class="nav-item"><a class="nav-link" href="app-user-view-connections.html"><i
                                    class="bx bx-link-alt me-1"></i>Connections</a></li>
                    </ul>
                    <!--/ User Pills -->

                    <!-- Project table -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="mb-0">Message App</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover datatable-project">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Number</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @isset($messageApp)
                                            @foreach ($messageApp as $it)
                                                <tr>
                                                    <td>{{ $it->number }}</td>
                                                    <td>{{ $it->message }}</td>
                                                </tr>
                                            @endforeach
                                        @endisset
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- /Project table -->

                    <div class="card mb-4">
                        <h5 class="card-header">User Activity Timeline</h5>
                        <div class="card-body">
                            <ul class="timeline">
                                @foreach ($notifications as $notification)
                                    <li class="timeline-item timeline-item-transparent">
                                        <span class="timeline-point-wrapper"><span
                                                class="timeline-point timeline-point-primary"></span></span>
                                        <div class="timeline-event">
                                            <div class="timeline-header mb-1">
                                                <h6 class="mb-0">{{ $notification->message_en }}</h6>
                                                <small
                                                    class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                                            </div>
                                            @if ($notification->to_user_id == $user->id)
                                                <p class="mb-2">{{ $notification->message_en }} TO
                                                    {{ $notification->toUser->nickname }} </p>
                                            @else
                                                <p class="mb-2"> {{ $notification->toUser->nickname }} TO
                                                    {{ $notification->message_en }} </p>
                                            @endif
                                            <div class="d-flex">
                                                <a href="javascript:void(0)" class="me-3">
                                                    <img src="https://ui-avatars.com/api/?name={{ $notification->toUser->nickname }}"
                                                        alt="{{ $notification->fromUser->email }}" width="30"
                                                        class="me-2">
                                                    <span
                                                        class="fw-medium text-body">{{ $notification->additional_column }}</span>
                                                </a>
                                                <a href="javascript:void(0)" class="me-3">
                                                    <img src="https://ui-avatars.com/api/?name={{ $notification->fromUser->email }}"
                                                        alt="{{ $notification->fromUser->nickname }}" width="30"
                                                        class="me-2">
                                                    <span
                                                        class="fw-medium text-body">{{ $notification->additional_column }}</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <li class="timeline-end-indicator">
                                    <i class="bx bx-check-circle"></i>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- /Activity Timeline -->

                    <!-- Invoice table -->
                    <div class="card mb-4">
                        <div class="table-responsive mb-3">
                            <!-- Assuming this is inside your Blade view -->
                            <table class="table datatable-invoice border-top">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User ID</th>
                                        <th>Country</th>
                                        <th>Residence Country</th>
                                        <th>Marriage Status</th>
                                        <th>Child Status</th>
                                        <!-- Add more headers as needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lifePartner as $partner)
                                        <tr>
                                            <td>{{ $partner['id'] }}</td>
                                            <td>{{ $partner['user_id'] }}</td>
                                            <td>{{ $partner['country']['name_en'] }}</td>
                                            <td>{{ $partner['residenceCountry']['name_en'] ?? '' }}</td>
                                            <td>
                                                @if ($partner['marriageStatus'])
                                                    <span
                                                        class="badge bg-success">{{ $partner['marriageStatus']['name'] }}</span>
                                                @else
                                                    <span class="badge bg-secondary">Not specified</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($partner['childStatus'])
                                                    <span
                                                        class="badge bg-info">{{ $partner['childStatus']['name'] }}</span>
                                                @else
                                                    <span class="badge bg-secondary">Not specified</span>
                                                @endif
                                            </td>
                                            <!-- Add more columns as needed -->
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>
                    </div>
                    <!-- /Invoice table -->
                </div>
                <!--/ User Content -->
            </div>

            <!-- Modal -->
            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3>Edit User Information</h3>
                                <p>Updating user details will receive a privacy audit.</p>
                            </div>
                            <form id="editUserForm" class="row g-3" onsubmit="return false">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                    <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                        class="form-control" placeholder="John" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                    <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                        class="form-control" placeholder="Doe" />
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalEditUserName">Username</label>
                                    <input type="text" id="modalEditUserName" name="modalEditUserName"
                                        class="form-control" placeholder="john.doe.007" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserEmail">Email</label>
                                    <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                        class="form-control" placeholder="example@domain.com" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserStatus">Status</label>
                                    <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                        <option value="3">Suspended</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditTaxID">Tax ID</label>
                                    <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                        class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserPhone">Phone Number</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">+1</span>
                                        <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                            class="form-control phone-number-mask" placeholder="202 555 0111" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserLanguage">Language</label>
                                    <select id="modalEditUserLanguage" name="modalEditUserLanguage"
                                        class="select2 form-select" multiple>
                                        <option value="">Select</option>
                                        <option value="english" selected>English</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="french">French</option>
                                        <option value="german">German</option>
                                        <option value="dutch">Dutch</option>
                                        <option value="hebrew">Hebrew</option>
                                        <option value="sanskrit">Sanskrit</option>
                                        <option value="hindi">Hindi</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditUserCountry">Country</label>
                                    <select id="modalEditUserCountry" name="modalEditUserCountry"
                                        class="select2 form-select" data-allow-clear="true">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="switch">
                                        <input type="checkbox" class="switch-input">
                                        <span class="switch-toggle-slider">
                                            <span class="switch-on"></span>
                                            <span class="switch-off"></span>
                                        </span>
                                        <span class="switch-label">Use as a billing address?</span>
                                    </label>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->

            <!-- Add New Credit Card Modal -->
            <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                    <div class="modal-content p-3 p-md-5">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="text-center mb-4">
                                <h3>Upgrade Plan</h3>
                                <p>Choose the best plan for user.</p>
                            </div>
                            <form id="upgradePlanForm" class="row g-3" onsubmit="return false">
                                <div class="col-sm-9">
                                    <label class="form-label" for="choosePlan">Choose Plan</label>
                                    <select id="choosePlan" name="choosePlan" class="form-select"
                                        aria-label="Choose Plan">
                                        <option selected>Choose Plan</option>
                                        <option value="standard">Standard - $99/month</option>
                                        <option value="exclusive">Exclusive - $249/month</option>
                                        <option value="Enterprise">Enterprise - $499/month</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary">Upgrade</button>
                                </div>
                            </form>
                        </div>
                        <hr class="mx-md-n5 mx-n3">
                        <div class="modal-body">
                            <h6 class="mb-0">User current plan is standard plan</h6>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex justify-content-center me-2 mt-3">
                                    <sup class="h5 pricing-currency pt-1 mt-3 mb-0 me-1 text-primary">$</sup>
                                    <h1 class="display-3 mb-0 text-primary">99</h1>
                                    <sub class="h5 pricing-duration mt-auto mb-2">/month</sub>
                                </div>
                                <button class="btn btn-label-danger cancel-subscription mt-3">Cancel Subscription</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Add New Credit Card Modal -->

            <!-- /Modal -->
        </div>
        <!-- / Content -->

    @section('footer')
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"
            integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>


        <script>
            new DataTable('#example', {
                "paging": true,
                "page": false,
                // scrollX: true,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "autoWidth": true,
                "fixedHeader": true,
                "order": [
                    [6, "desc"]
                ],
                "colReorder": true,
                keys: true,
                dom: 'Bfrtip',
            });
            $(document).ready(function() {
                $('.delete-category').click(function() {
                    var categoryId = $(this).data('id');
                    $('#deleteCategoryModal').modal('show');

                    $('#confirmDelete').click(function() {
                        $.ajax({
                            type: 'DELETE',
                            url: '/dashboard/table_name /' + categoryId,
                            data: {
                                '_token': '{{ csrf_token() }}',
                            },
                            success: function(data) {
                                // Reload the page or update the table as needed
                                location.reload();
                            }
                        });
                    });
                });
            });
        </script>
    @endsection
@endsection
