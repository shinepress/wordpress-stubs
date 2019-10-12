<?php


// --------------------------------------------------------------------------------
// --------------------------------------------------------------------------------
// Function : PclZipUtilPathInclusion()
// Description :
//   This function indicates if the path $p_path is under the $p_dir tree. Or,
//   said in an other way, if the file or sub-dir $p_path is inside the dir
//   $p_dir.
//   The function indicates also if the path is exactly the same as the dir.
//   This function supports path with duplicated '/' like '//', but does not
//   support '.' or '..' statements.
// Parameters :
// Return Values :
//   0 if $p_path is not inside directory $p_dir
//   1 if $p_path is inside directory $p_dir
//   2 if $p_path is exactly the same as $p_dir
// --------------------------------------------------------------------------------
function PclZipUtilPathInclusion($p_dir, $p_path)
{
}