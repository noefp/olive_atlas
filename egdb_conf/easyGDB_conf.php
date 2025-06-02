<?php
// File paths
$root_path = "/var/www/html"; //use absolute path
$egdb_files_folder = "olive_atlas";

$easy_gdb_path = "$root_path/easy_gdb";
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$downloads_path = "downloads";
$annotations_path = "$root_path/annotations";
$blast_dbs_path = "$root_path/blast_dbs";
$lookup_path = "$root_path/lookup"; //from root
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$json_files_path = "$root_path/$egdb_files_folder/json_files";

// Custom css file
// $custom_css_path = "$egdb_files_folder/css/custom.css";

//Expression
$expression_path = "$root_path/expression_data/olivo";
$private_expression_path = "$root_path/private_expression_data/olivo";

//Site title, site logo and header image
$dbTitle = "OliveAtlas";
$db_logo = "OxA_logo.png";

// Select 0 to disable the header image, or provide an image filename to display it.
$header_img = 0;

//SWITCHES

// remove citation from welcome page
$rm_citation = 0;

// Select 1 to store annotations in files or 0 to store annotations in a relational database.
$file_database = 1;

// Set to 1 to remove the jbrowse frame from gene.php. Set to 1 if JBrowse was not installed or setup.
$rm_jb_frame = 0;

// Toolbar
$tb_custom = 1;
$tb_rm_home = 1;

$tb_about = 0;
$tb_downloads = 0;
$tb_species = 0;
$tb_search_box = 0;

$tb_tools = 0;
$tb_search = 0;
$tb_blast = 0;
$tb_jbrowse = 0;
$tb_seq_ext = 0;
$tb_annot_ext = 0;
$tb_lookup = 0;
$tb_enrichment = 0;

//Gene expression atlas
$tb_gene_expr = 0;

$tb_help = 0;
$tb_more = 0;
$tb_private = 0;

// About
$ab_citation = 0;
$ab_labs = 0;

// Expression Atlas
$expr_menu = 1;
$comparator_lookup = 0;

// Expression tools order: 0 for not shown, >=1 to setup the order
$positions=[
  'description' => 1,
  'cartoons' => 2,
  'lines' => 3,
  'cards' => 4,
  'heatmap' => 5,
  'replicates' => 6,
  'table' => 7
];

//Gene examples
$gene_sample = "";
$input_gene_list="Oleur061Scf2145g00022.1
Oleur061Scf2075g02039.1
Oleur061Scf2086g01023.1";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 150;
$max_annotation_input = 20000;

// BLAST
$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA";

?>
