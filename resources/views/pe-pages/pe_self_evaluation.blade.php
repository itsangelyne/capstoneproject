@extends('layout.master')

@section('title')
<h1>Self-Evaluation Form</h1>
@endsection

@section('content')
<div class="content-container">
    <h2>Employee Information</h2>
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label class="col-form-label">Last Name:</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
        <div class="col-auto">
            <label class="col-form-label">First Name:</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label class="col-form-label">Job Title:</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
        <div class="col-auto">
            <label class="col-form-label">Department:</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label class="col-form-label">Immediate Superior's Name:</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="row g-3 align-items-center mb-3">
        <div class="col-auto">
            <label class="col-form-label">Immediate Superior's Position:</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control">
        </div>
    </div>

</div>
<div class='content-container'>
    <h2>Instructions</h2>
    <p class='text-justify'>This performance appraisal is designed to improve organizational effectiveness and to assist
        the job incumbent in
        his/her job performance as well as his/her professional growth and development. Please take time to evaluate the
        job incumbent by completing this evaluation form. Please be reflective and candid in your responses. Kindly
        submit the accomplished form to HRMD on or before the deadline. Your cooperation is highly appreciated. Thank
        you.</p>
</div>
<div class="content-container">
    <h2>I. Behavioral Competencies</h2>
    <p>Given the following behavioral competencies, you are to assess the incumbent's performance using the scale. Put
        No. 1 on the number which corresponds to your answer for each item. Please answer each item truthfully.<br>

        5 - Almost Always 4 - Frequently 3 - Sometimes 2 - Occasionally 1 - Hardly Ever</p>
    <h3>Core Values</h3>
    <h4>Search for Excellence</h4>
    <p>The highest standards of academic excellence and professionalism in service are the hallmarks of our educative
        endeavors. We regularly assess and transform our programs to make them effective for leaning, discovery of
        knowledge and community service. Our service ethics manifest strong sense of responsibility, competency,
        efficiency and professional conduct.</p>
    <h4>Sustained Integral Development</h4>
    <p>Education is a lifelong quest whose primary purpose is the full and integral development of the human person. We
        are committed to provide programs for holistic development and continuous learning. Networking with other
        educational institutions, government agencies, industries, business and other groups enhances our educational
        services.</p>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='extra-small-column'>#</th>
                <th>Question</th>
                <th>Performance Level</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td class='large-column'>
                    <div class="d-flex justify-content-center gap-2">
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table1_1" class="form-check-input" value="5">
                                5
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table1_1" class="form-check-input" value="4">
                                4
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table1_1" class="form-check-input" value="3">
                                3
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table1_1" class="form-check-input" value="2">
                                2
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table1_1" class="form-check-input" value="1">
                                1
                            </label>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td class='text-right'>Frequency:</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class='text-right'>Total:</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <input class="small-column form-control" type="text" value="1" readonly>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>

    <h4>Spirit of St. Vincent de Paul</h4>
    <p>The spirit of St. Vincent inspires and permeates our learning community, programs and services. This is shown in
        our sensitivity to the presence of God, compassionate service and the building of supportive relationships
        towards an effective service to persons in need.</p>
    <h4>Social Responsibility</h4>
    <p>Education at Adamson aims at developing a sense of social responsibility - a mark of an authentic Christian
        faith. Social responsibility leads us to empower the marginalized sectors of society through the creation of
        knowledge and human development. We are committed to work for the building of a society based on justice, peace,
        respect for human dignity and the integrity of creation.</p>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='extra-small-column'>#</th>
                <th>Question</th>
                <th class='small-column'>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td class='large-column'>
                    <div class="d-flex justify-content-center gap-2">
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table2_1" class="form-check-input" value="5">
                                5
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table2_1" class="form-check-input" value="4">
                                4
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table2_1" class="form-check-input" value="3">
                                3
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table2_1" class="form-check-input" value="2">
                                2
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table2_1" class="form-check-input" value="1">
                                1
                            </label>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td class='text-right'>Frequency:</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class='text-right'>Total:</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <input class="small-column form-control" type="text" value="1" readonly>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>

    <h4>Solidarity</h4>
    <p>Drawn together by a common vision and mission, we believe education is a shared responsibility and a
        collaborative effort where the gifts of persons are valued. Our learning community is a "family" where
        participation, team work, interdependence, communication and dialogue prevail. A culture of appreciation builds
        up our community, encouraging us towards excellence and professionalism.</p>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='extra-small-column'>#</th>
                <th>Question</th>
                <th class='small-column'>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td class='large-column'>
                    <div class="d-flex justify-content-center gap-2">
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table3_1" class="form-check-input" value="5">
                                5
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table3_1" class="form-check-input" value="4">
                                4
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table3_1" class="form-check-input" value="3">
                                3
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table3_1" class="form-check-input" value="2">
                                2
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="table3_1" class="form-check-input" value="1">
                                1
                            </label>
                        </div>
                    </div>
                </td>

            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td class='text-right'>Frequency:</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                        <div class="col-auto">
                            <input class="xxs-column form-control" type="text" value="1" readonly>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td class='text-right'>Total:</td>
                <td>
                    <div class="d-flex justify-content-center gap-3">
                        <input class="small-column form-control" type="text" value="1" readonly>
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="content-container">
    <h2>II. Key Results Areas & Work Objectives</h2>
    <p>Please review each Key Results Area (KRA) and Work Objectives (WO) of job incumbent and compare such with his/her
        actual outputs. Finally, indicate the degree of output using the Likert-Scale below.</p>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='large-column'>Accomplishment Level</th>
                <th colspan="2">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5</td>
                <td>Oustanding Performance</td>
                <td class='text-justify'>Performance far exceeds the standard expected of a job holder at this level.
                    The review/assessment indicates that the job holder has achieved greater than fully effective
                    results against all of the performance criteria and indicators as specified in the Performance
                    Agreement and Work plan. Maintained this in all areas of responsibility throughout the performance
                    cycle.</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Performance significantly above expectations</td>
                <td class='text-justify'>Performance fully meets the standards expected for the job. The
                    review/assessment indicates that the job holder has achieved better than fully effective results
                    against more than half of the performance criteria and indicators as specified in the Performance
                    Agreement and Work plan.</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Performance fully effective (and slightly above expectations)</td>
                <td class='text-justify'>Performance fully meets the standards expected in all areas of the job. The
                    review/assessment indicates that the job holder has achieved as a minimum effective results against
                    all of the performance criteria and indicators as specified in the Performance Agreement and Work
                    plan.</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Performance not fully effective</td>
                <td class='text-justify'>Performance meets some of the standards expected for the job. The
                    review/assessment indicates that the job holder has achieved less than fully effective results
                    against more than half of the performance criteria and indicators as specified in the Performance
                    Agreement and Work plan.</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Unacceptable performance</td>
                <td class='text-justify'>Performance does not meet the standard expected for the job. The
                    review/assessment indicates that the job holder has achieved less than fully effective results
                    against almost all of the performance criteria and indicators as specified in Performance Agreement
                    and Work plan. </td>
            </tr>
        </tbody>
    </table>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='large-column'>KRA</th>
                <th class='small-column'>Weight</th>
                <th class='large-column'>Objectives</th>
                <th class='large-column'>Performance Indicators</th>
                <th class='large-column'>Actual Results</th>
                <th>Performance Level</th>
                <th>Weighted Total</th>
            </tr>
        </thead>
        <tbody>
            <tr class='align-middle'>
                <td class='td-textarea'>
                    <textarea class='textarea' readonly></textarea>
                </td>
                <td>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>%</option>
                        @for ($i = 1; $i <= 100; $i++) <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                    </select>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea' readonly></textarea>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea' readonly></textarea>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
                <td>
                    <div class="d-flex justify-content-center gap-2">
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="kra1_1" class="form-check-input" value="5">
                                5
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="kra1_1" class="form-check-input" value="4">
                                4
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="kra1_1" class="form-check-input" value="3">
                                3
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="kra1_1" class="form-check-input" value="2">
                                2
                            </label>
                        </div>
                        <div class="col-auto">
                            <label class="form-check-label">
                                <input type="radio" name="kra1_1" class="form-check-input" value="1">
                                1
                            </label>
                        </div>
                    </div>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="content-container">
    <h2>III. Future Performance Agenda</h2>
    <h3>Work Performance Plans</h3>
    <p>Identify work behaviors that the job incumbent needs to:</p>
    <table class='table table-bordered' id='wpa-table'>
        <thead>
            <tr>
                <th>Continue Doing</th>
                <th>Stop Doing</th>
                <th>Start Doing</th>
                <th class='small-column'>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr id="wpa_1">
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
                <td class='td-action'></td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" id="add-wpa-btn">Add Row</button>
    </div>

    <h3>Learning Development Plans</h3>
    <p>Identify the learning needs of the job incumbent likewise recommend specific learning methodologies for each need
        that you have mentioned.</p>
    <table class='table table-bordered' id='ldp_table'>
        <thead>
            <tr>
                <th>Learning Need</th>
                <th>Methodology</th>
                <th class='small-column'>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr id="ldp_1">
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
                <td class='td-action'></td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" id="add-ldp-btn">Add Row</button>
    </div>
</div>

<div class="content-container">
    <h2>IV. Job Incumbent's Comments</h2>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class='medium-column'>Question</th>
                <th class='small-column'>Answer</th>
                <th class='large-column'>Comments</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class='text-justify'>I agree with my performance rating.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
            </tr>
            <tr>
                <td class='text-justify'>My future work objectives and learning opportunities have been set for the next
                    review period.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>

            </tr>
            <tr>
                <td class='text-justify'>I am satisfied with the performance review discussion.</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
            </tr>
            <tr>
                <td class='text-justify'>I am satisfied with the performance review process</td>
                <td>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                </td>
                <td class='td-textarea'>
                    <textarea class='textarea'></textarea>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#add-wpa-btn').click(function() {
            var lastRow = $('#wpa-table tbody tr:last-child');
            var clonedRow = lastRow.clone();

            clonedRow.find('textarea').val('');
            clonedRow.find('.td-action').html('<button class="btn btn-danger delete-btn align-middle">Delete</button>');
            clonedRow.appendTo('#wpa-table tbody');
        });

        $(document).on('click', '.delete-btn', function() {
            $(this).closest('tr').remove();
        });

        $('#add-ldp-btn').click(function() {
            var lastRow = $('#ldp_table tbody tr:last-child');
            var clonedRow = lastRow.clone();

            clonedRow.find('textarea').val('');
            clonedRow.find('.td-action').html('<button class="btn btn-danger delete-btn align-middle">Delete</button>');
            clonedRow.appendTo('#ldp_table tbody');
        });

        $(document).on('click', '.delete-btn', function() {
            $(this).closest('tr').remove();
        });
    });

</script>

@endsection