<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = ['firstname'
    ,'lastname'
    ,'birthday'
    ,'gender'
    ,'identifyCard'
    ,'phoneNumber'
    ,'priority'
    ,'admissionForm'
    ,'highSchool'
    ,'province'
    ,'district'
    ,'ward'
    // ,'major1'
    // ,'subject1_1'
    // ,'subject1_2'
    // ,'subject1_3'
    // ,'major2'
    // ,'subject2_1'
    // ,'subject2_2'
    // ,'subject2_3'
    // ,'major3'
    // ,'subject3_1'
    // ,'subject3_2'
    // ,'subject3_3'
];
}
