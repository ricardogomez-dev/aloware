<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Bitcoin is "a liquid alternative to cash" says Elon Musk',
            'short_description' => 'In a recent U.S. Securities and Exchange Commission (SEC) filing, Tesla Inc. reiterated its pro-Bitcoin position stating that bitcoin has “long-term potential” and is “a liquid alternative to cash”...',
            'full_description' => '<ul>
                <li>In a recent SEC filing, Tesla doubled-down on its bitcoin investment as &ldquo;a liquid alternative to cash&rdquo; thesis.</li>
                <li>Tesla experienced a rocky path from buying bitcoin, to accepting it as payment, and later removing it as a payment method over environmental concerns.</li>
                <li>Tesla also recently entered the bitcoin mining space.</li>
            </ul>

            <p>In a recent U.S. Securities and Exchange Commission (SEC)&nbsp;<a href="https://www.sec.gov/Archives/edgar/data/1318605/000095017022006034/tsla-20220331.htm" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">filing</a>, Tesla Inc. reiterated its pro-Bitcoin position stating that bitcoin has &ldquo;long-term potential&rdquo; and is &ldquo;a liquid alternative to cash.&rdquo;</p>

            <p>The filing also confirmed that the electric car maker did not sell any of its bitcoin holdings since the quarter prior.</p>

            <p>During the first quarter of 2021, Tesla&nbsp;<a href="https://bitcoinmagazine.com/markets/its-happening-tesla-buys-1-5-billion-of-bitcoin">invested</a>&nbsp;an aggregate of $1.5 billion in bitcoin, per an SEC&nbsp;<a href="https://www.sec.gov/Archives/edgar/data/1318605/000156459021004599/tsla-10k_20201231.htm" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">filing</a>&nbsp;at the time. Within that filing, Tesla provided information explaining how the investment would &ldquo;provide us with more flexibility to further diversify and maximize returns on our cash that is not required to maintain adequate operating liquidity.&rdquo;</p>

            <p>Tesla also stated its intentions to accept bitcoin as a means of payment for goods and services in the future in the Q1 2021 filing. News of the investment spread across all forms of media and Elon Musk, the company&rsquo;s CEO, became more active in discussions involving bitcoin.</p>

            <p>On April 26, 2021 the initial investment for means of liquidity was strengthened when Musk took to Twitter in order to defend Tesla&rsquo;s choice to sell 10% of its bitcoin holdings during Q2 2021 stating:</p>

            <p>&ldquo;Tesla sold 10% of its holdings essentially to prove liquidity of Bitcoin as an alternative to holding cash on balance sheet,&rdquo; he wrote.</p>

            <p>The SEC filing referencing the aforementioned sale netted Tesla a gain of $128 million. However, in June 13, 2021 Musk capitulated to market environmental concerns as he stated bitcoin needed to use more clean energy, thereby removing the option to receive bitcoin as payment until there was verifiable information showing &ldquo;confirmation of reasonable (~50%) clean energy usage by miners with positive future trend,&rdquo; he said.</p>

            <p>On October 14, 2021 it was reported that Tesla was up over $1 billion on its initial investment into bitcoin. More recently, April 8, 2022 Tesla announced a partnership with BlockStream and Block, noting that Tesla energy equipment would be leveraged for a $12 million bitcoin mining facility.</p>

            <p>In full circle, Tesla entered the bitcoin ecosystem with a massive $1.5 billion BTC buy, took action for the environment as it believed was necessary, held its BTC reserves, and returned to the ecosystem as a clean bitcoin mining participant.&nbsp;</p>',
        ]);

        DB::table('articles')->insert([
            'title' => 'Bitcoin miner marathon digital eyes 199,000 miners, holds over 9,000 BTC',
            'short_description' => 'Marathon Digital Holdings Inc (Nasdaq: MARA), one of the largest North American bitcoin-miners...',
            'full_description' => '<ul>
    <li>Marathon Digital Holdings, one of the largest North American bitcoin-miners, released its production and mining operations update for April 2022.</li>
    <li>Total bitcoin holdings equal 9,673 BTC valued at $377.2 million with YTD production increases of 340% over the same period last year.</li>
    <li>By early 2023, the total mining fleet of Marathon will contain 199,000 active miners.</li>
</ul>

<p>Marathon Digital Holdings Inc (Nasdaq: MARA), one of the largest North American bitcoin-miners, released its production and mining operation update for April 2022 showing total bitcoin holdings of 9,673 BTC valued at $377.2 million at time of writing, according to a&nbsp;<a href="https://www.globenewswire.com/news-release/2022/05/04/2435699/0/en/Marathon-Digital-Holdings-Announces-Bitcoin-Production-and-Mining-Operation-Updates-for-April-2022.html" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">press release</a>.</p>

<p>The addition of 4,183 miners extended Marathon&rsquo;s hashrate by 0.4 exahash per second (EH/s). All of the miners were installed at a new location in Texas in liquid-immersed containers with thousands more currently expected to be energized throughout May. Once these miners are operational the total mining fleet will consist of 36,830 miners reaching a cumulative 3.9 EH/s.</p>

<p>During the month of April, Marathon mined 299 BTC valued at $11.6 million at time of writing. Marathon notes the production was down an estimated 30% due to ongoing maintenance and downtime at a facility located in Hardin, Montana. The maintenance for this facility was to achieve Marathon&rsquo;s goal of 100% carbon neutrality by the end of 2022 by transitioning from fossil fuel powered miners to renewable operations.</p>

<p>Year-to-date (YTD) the mining fleet of Marathon has produced 1,558 BTC valued at $60.7 million at time of writing, representing a 340% year-over-year (YoY) increase. By early 2023, Marathon expects to have a total fleet of 199,000 miners reaching a hashpower of 23.3 EH/s. The entirety of this fleet is expected to be 100% carbon neutral.</p>

<p>Marathon&rsquo;s cash reserves totalled $40.4 million at the end of April and noted that total liquidity, which includes cash and credit facilities, reached a total $70.4 million.&nbsp;</p>',
        ]);

        DB::table('articles')->insert([
            'title' => 'Bitcoin is halfway to the next halving',
            'short_description' => 'Bitcoin is now in-between the prior halving and the next, blockchain data showed Thursday morning...',
            'full_description' => '<p>Bitcoin is now in-between the prior halving and the next, blockchain data showed Thursday morning.</p>

<p>The phenomenon happened exactly on&nbsp;<a href="https://mempool.space/block/000000000000000000055fc826f66e3b1135096a9d12ff75804815d3d1c72cd8" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">block number 735,000</a>&nbsp;on the Bitcoin blockchain, which was mined at around 6:30 a.m. ET on May 5, 2022. It was the 105,000th block to be mined after the last halving, which occurred in May 2020 on block number 630,000. The next halving is set to happen on block 840,000.</p>

<p>The Bitcoin protocol decreases the reward it gives to miners by 50% every 210,000 blocks &ndash; hence the name &ldquo;halving.&rdquo; It takes on average four years to mine those blocks.</p>

<p>Miners earn reward on the Bitcoin network by adding new blocks to the chain.</p>

<p>Millions of computers around the world attempt to be the next lucky miner to earn the reward by calculating the block&rsquo;s uniquely identifying number through a function that takes things like Bitcoin transactions and a timestamp as parameters, as well as a random number known as a nonce.</p>

<p>Miners vary those parameters in an attempt to find a valid number, or hash, that is below a target set by the network and known as difficulty. The lower the target, the more difficult it is to mine bitcoin because the more leading zeroes are required to satisfy the requirement</p>

<p>Early bitcoin miners earned 50 BTC for each block they mined when the network was first spun up in 2009. The low-difficulty high-reward epoch began to fade in 2012 as the first halving ensued, cutting the reward to 25 BTC.</p>

<p>Four years later, in 2016, each Bitcoin block started giving out only 12.5 BTC for its miner. Two years ago, the block reward was further cut in half to 6.25 bitcoin &ndash; the number that still prevails today. In 2024, the protocol is set to repeat the halving once more, dropping the block reward to 3.125 BTC.</p>',
        ]);

        DB::table('articles')->insert([
            'title' => 'The future looks bright for bitcoin',
            'short_description' => 'It was an honor to take part in this year’s Bitcoin 2022 Conference in Miami. The inspiring conversations that took place at the convention center are what fuels the work we do...',
            'full_description' => '<p>It was an honor to take part in this year&rsquo;s&nbsp;<a href="https://b.tc/conference/" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">Bitcoin 2022</a>&nbsp;Conference in Miami. The inspiring conversations that took place at the convention center are what fuels the work we do. The discussions that really spoke to me were those centered around education and global Bitcoin adoption. I emphasized this point during the panel on &ldquo;<a href="https://www.youtube.com/watch?v=A6-P9soM6aM" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">Building Lightning-Focused Companies</a>:&rdquo; Everything we do has to be focused on global adoption and it&rsquo;s imperative that we shift our focus to build products for real people and products that have real use cases. Several panels during the conference echoed this same sentiment. A few of my favorite moments:</p>

<h3>&nbsp;THE FIRST AFRICA BITCOIN CONFERENCE IN GHANA</h3>

<ul>
    <li><a href="https://www.youtube.com/watch?v=tvuBGX8yg5M" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">Fod&eacute; Diop announced</a>&nbsp;on the Nakamoto Stage that the first Africa Bitcoin Conference will take place in Ghana in December 2022.</li>
    <li>Diop also spoke on creating a &ldquo;United States of Africa.&rdquo; Currently, there are several challenges that prevent individuals from trading and doing business with other countries within Africa, from high transaction fees to transfer delays &mdash; Bitcoin can solve this.</li>
</ul>

<h3>FRANCIS NGANNOU ON HOW BITCOIN CAN SAVE AFRICA</h3>

<ul>
    <li>Francis Ngannou is a mixed martial arts (MMA) fighter originally from Cameroon.&nbsp;<a href="https://www.youtube.com/watch?v=CcTDF8Oh434" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">He spoke</a>&nbsp;about the financial obstacles and complexities within Africa, discussing how Bitcoin can allow for financial freedom in a country where the French have financial control over the CFA franc.</li>
    <li>Ngannou also shared that 70% of people don&#39;t have a bank account in Africa. There are too many barriers that exist, so the 70% gets left behind &mdash; again, Bitcoin can solve this.</li>
</ul>

<h3>ACTIVISTS SHARE HOW BITCOIN CAN PROVIDE FINANCIAL FREEDOM</h3>

<ul>
    <li>Alex Gladstein&rsquo;s session, &ldquo;<a href="https://youtu.be/cR4sMsI8z7U" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">Bitcoin Is Freedom</a>,&rdquo; shined a light on three human rights activists, Yeonmi Park, Farida Nabourema and Fadi Elsalameen, who spoke about the intersection of money and human rights in North Korea, Togo, and Palestine and how Bitcoin can lead to a brighter future.</li>
    <li>Each ended the session by sharing the need for these countries to combat limitations on remittance and government control &mdash; Bitcoin can solve this, too.</li>
</ul>

<p>There is a lot happening in the emerging markets, and countries like&nbsp;<a href="https://bitcoinmagazine.com/tags/nigeria">Nigeria</a>&nbsp;and&nbsp;<a href="https://bitcoinmagazine.com/tags/el-salvador">El Salvador</a>&nbsp;have already begun to show the world Bitcoin&rsquo;s true use cases. A few examples include the panel &ldquo;<a href="https://youtu.be/RmAiZaIzwFg" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">Building Bitcoin Communities</a>,&rdquo; where several changemakers took the stage to share how they are on the ground, in places like Bitcoin Beach and beyond, putting Bitcoin to work for the people. Off-stage at the Renaissance Art Gallery, a Bitcoin NFT project,&nbsp;<a href="https://builtwithnft.org/" onclick="return phoenixTrackClickEvent(this, event);" target="_blank">Built With NFT</a>, showcased how Bitcoin can be used for social good. It&rsquo;s these initiatives that help show the world Bitcoin&rsquo;s true power.</p>

<p>Bitcoin has real value that can drive financial freedom for 100% of people. While the Bitcoin Conference is evidence that the Bitcoin community is growing, there is still a lot of work to be done. We need to move faster to get Bitcoin to the streets &mdash; specifically to the communities that need it most. Education about Bitcoin is what will get us there. I hope that next year there can be even more content around how Bitcoin is making an impact around the world. We are just beginning to scratch the surface &mdash; Bitcoin will change the world, and I&rsquo;m honored to be witness to this movement.</p>',
        ]);
    }
}
