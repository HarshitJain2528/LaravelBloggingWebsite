@extends('AdminFiles.layouts.main')

@section('admin-settings-section')
    @include('AdminFiles.layouts.navbar')

    <!-- Settings Section -->
    <div class="container dashboard-content">
        <h2>Settings</h2>
        <div class="accordion" id="settingsAccordion">
            <!-- General Settings -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="generalSettingsHeading">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#generalSettingsCollapse" aria-expanded="true" aria-controls="generalSettingsCollapse">
                        General Settings
                    </button>
                </h2>
                <div id="generalSettingsCollapse" class="accordion-collapse collapse show" aria-labelledby="generalSettingsHeading" data-bs-parent="#settingsAccordion">
                    <div class="accordion-body">
                        <!-- Form for configuring general settings -->
                        <!-- Include fields for site title, description, logo, favicon, etc. -->
                    </div>
                </div>
            </div>

            <!-- SEO Settings -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="seoSettingsHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#seoSettingsCollapse" aria-expanded="false" aria-controls="seoSettingsCollapse">
                        SEO Settings
                    </button>
                </h2>
                <div id="seoSettingsCollapse" class="accordion-collapse collapse" aria-labelledby="seoSettingsHeading" data-bs-parent="#settingsAccordion">
                    <div class="accordion-body">
                        <!-- Form for configuring SEO settings -->
                        <!-- Include fields for meta tags, titles, descriptions, etc. -->
                    </div>
                </div>
            </div>

            <!-- Reading Settings -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="readingSettingsHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#readingSettingsCollapse" aria-expanded="false" aria-controls="readingSettingsCollapse">
                        Reading Settings
                    </button>
                </h2>
                <div id="readingSettingsCollapse" class="accordion-collapse collapse" aria-labelledby="readingSettingsHeading" data-bs-parent="#settingsAccordion">
                    <div class="accordion-body">
                        <!-- Form for configuring reading settings -->
                        <!-- Include fields for post visibility, posts per page, etc. -->
                    </div>
                </div>
            </div>

            <!-- Security Settings -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="securitySettingsHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#securitySettingsCollapse" aria-expanded="false" aria-controls="securitySettingsCollapse">
                        Security
                    </button>
                </h2>
                <div id="securitySettingsCollapse" class="accordion-collapse collapse" aria-labelledby="securitySettingsHeading" data-bs-parent="#settingsAccordion">
                    <div class="accordion-body">
                        <!-- Form for configuring security settings -->
                        <!-- Include fields for password policies, two-factor authentication, etc. -->
                    </div>
                </div>
            </div>

            <!-- API & Integrations Settings -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="apiSettingsHeading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#apiSettingsCollapse" aria-expanded="false" aria-controls="apiSettingsCollapse">
                        API & Integrations
                    </button>
                </h2>
                <div id="apiSettingsCollapse" class="accordion-collapse collapse" aria-labelledby="apiSettingsHeading" data-bs-parent="#settingsAccordion">
                    <div class="accordion-body">
                        <!-- Form for managing API and integrations -->
                        <!-- Include fields for third-party integrations, API configurations, etc. -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection