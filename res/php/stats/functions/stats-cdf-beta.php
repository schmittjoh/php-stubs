<?php

/**
 * CDF function for BETA Distribution. Calculates any one parameter of the beta distribution given values for the others.
 *
 * @phpstub
 *
 * @param float $par1
 * @param float $par2
 * @param float $par3
 * @param int $which
 *
 * @return float STATUS  -- 0 if calculation completed correctly
 *               -I if input parameter number I is out of range
 *               1 if answer appears to be lower than lowest
 *               search bound
 *               2 if answer appears to be higher than greatest
 *               search bound
 *               3 if P + Q .ne. 1
 *               4 if X + Y .ne. 1
 */
function stats_cdf_beta($par1, $par2, $par3, $which)
{
}