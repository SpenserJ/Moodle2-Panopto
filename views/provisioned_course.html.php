<?php // Copyright Panopto 2009 - 2011 / With contributions from Spenser Jones (sjones@ambrose.edu) ?>

<div class='courseProvisionResult'>
    <div class='attribute'>Course Name</div>
    <div class='value'><?php echo $provisioning_data->ShortName . ": " . $provisioning_data->LongName ?></div>

    <div class='attribute'>Instructors</div>
    <div class='value'>
        <?php
        if(!empty($provisioning_data->Instructors))
        {
            $instructors = $provisioning_data->Instructors;
            // Single-element return set comes back as scalar, not array (?)
            if(!is_array($instructors))
            {
                $instructors = array($instructors);
            }    
            $instructor_info = array();
            foreach($instructors as $instructor)
            {
                array_push($instructor_info, "$instructor->UserKey ($instructor->FirstName $instructor->LastName &lt;$instructor->Email&gt;)");
            }

            echo join("<br />", $instructor_info);
        }
        else
        {
            ?><div class='errorMessage'>No instructors.</div><?php
        }
        ?>
    </div>
    <div class='attribute'>Students</div>
    <div class='value'>
        <?php
        if(!empty($provisioning_data->Students))
        {
            $students = $provisioning_data->Students;
            // Single-element return set comes back as scalar, not array (?)
            if(!is_array($students))
            {
                $students = array($students);
            }
            $student_info = array();
            foreach($students as $student)
            {
                array_push($student_info, $student->UserKey);
            }

            echo join(", ", $student_info);
        }
        else
        {
            ?><div class='errorMessage'>No students.</div><?php
        }
        ?>
    </div>
    <div class='attribute'>Result</div>
    <div class='value'>
    <?php 
    if(!empty($provisioned_data))
    {
    ?>
        <div class='successMessage'>Successfully provisioned course {<?php echo $provisioned_data->PublicID ?>}</div>
    <?php 
    }
    else
    {
    ?>
        <div class='errorMessage'>Error provisioning course.</div>
    <?php 
    }
    ?>
    </div>
</div>