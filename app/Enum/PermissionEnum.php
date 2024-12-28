<?php

namespace App\Enum;

enum PermissionEnum:string
{
    case ManageFeature='manageFeature';
    case ManageComment='manageComment';
    case ManageUser="manageUser";
    case UpvoteDownvote='upvoteDownvote';
}
