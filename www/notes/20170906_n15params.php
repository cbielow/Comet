<?php include "head.php" ; ?>
<body>

<?php include "analyticstracking.php" ; ?>
<?php include "topmenu.php" ; ?>
<?php include "imgbar.php" ; ?>

<div id="page">
   <div id="content_full">
      <div class="post">
         <h1>Notes 2017.09.06</h1>
            <div class="post hr">
               <p>To run an N15 heavy search, add (0.977035 * #nitogens) for each amino acid.
                  If you need to account for carboxyamidomethylation, addjust the
                  cysteine mass accordingly (57.021464 + 0.997035 = 58.018499).

               <p>Here are the relevant parameter settings:

               <p><pre>add_G_glycine = 0.997035               # added to G - avg.  57.0513, mono.  57.02146
add_A_alanine = 0.997035               # added to A - avg.  71.0779, mono.  71.03711
add_S_serine = 0.997035                # added to S - avg.  87.0773, mono.  87.03203
add_P_proline = 0.997035               # added to P - avg.  97.1152, mono.  97.05276
add_V_valine = 0.997035                # added to V - avg.  99.1311, mono.  99.06841
add_T_threonine = 0.997035             # added to T - avg. 101.1038, mono. 101.04768
add_C_cysteine = 0.997035              # added to C - avg. 103.1429, mono. 103.00918
add_L_leucine = 0.997035               # added to L - avg. 113.1576, mono. 113.08406
add_I_isoleucine = 0.997035            # added to I - avg. 113.1576, mono. 113.08406
add_N_asparagine = 1.99407             # added to N - avg. 114.1026, mono. 114.04293
add_D_aspartic_acid = 0.997035         # added to D - avg. 115.0874, mono. 115.02694
add_Q_glutamine = 1.99407              # added to Q - avg. 128.1292, mono. 128.05858
add_K_lysine = 1.99407                 # added to K - avg. 128.1723, mono. 128.09496
add_E_glutamic_acid = 0.997035         # added to E - avg. 129.1140, mono. 129.04259
add_M_methionine = 0.997035            # added to M - avg. 131.1961, mono. 131.04048
add_O_ornithine = 1.99407              # added to O - avg. 132.1610, mono  132.08988
add_H_histidine = 2.99111              # added to H - avg. 137.1393, mono. 137.05891
add_F_phenylalanine = 0.997035         # added to F - avg. 147.1739, mono. 147.06841
add_U_selenocysteine = 0.997035        # added to U - avg. 150.3079, mono. 150.95363
add_R_arginine = 3.98814               # added to R - avg. 156.1857, mono. 156.10111
add_Y_tyrosine = 0.997035              # added to Y - avg. 163.0633, mono. 163.06333
add_W_tryptophan = 1.99407             # added to W - avg. 186.0793, mono. 186.07931
add_B_user_amino_acid = 0.0000         # added to B - avg.   0.0000, mono.   0.00000
add_J_user_amino_acid = 0.0000         # added to J - avg.   0.0000, mono.   0.00000
add_X_user_amino_acid = 0.0000         # added to X - avg.   0.0000, mono.   0.00000
add_Z_user_amino_acid = 0.0000         # added to Z - avg.   0.0000, mono.   0.00000

</pre>
            </div>
      </div>
   </div>

   <div style="clear: both;">&nbsp;</div>
</div>

<?php include "footer.php" ; ?>

</body>
</html>

