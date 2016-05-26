<!DOCTYPE HTML>
<html>

<head>
    <?php include('common/head.php') ?>
</head>

<body>

    <!-- Header -->
    <header id="header">
        <?php include('common/header.php') ?>
    </header>


    <!-- Main -->
    <section id="main" class="container">
        <header>
            <h2>Events and Announcements</h2>
            <p>"What events does TBP have planned for me?"</p>
        </header>
        <section class="box">
            <section class="major special">
                <h2><u>Week 1 Announcements</u></h2>
            </section>
            <ol>
                <li>
                    <a href="https://www.facebook.com/groups/tbp.ucsd/">For all members, please join our FB page!</a>
                    <br />
                </li>
                <br>
                <li>
                    <b>Non-TBP Hosted Events for Points</b>
                    <br /> Events not hosted by Tau Beta Pi or not listed on our calendar, may still be eligible for points. In order to receive points for these events, members and/or initiates must write a one-page write up of the event, including an event
                    description as well as why you believe it should count as an event and how it follows TBP's goals. A picture must also be shown as proof of event attendance. You will then need to email the write-up to an officer for approval before
                    getting the points signed off and just include the picture with that. And then once you've written that and after the officers have approved it, you can bring your point sheet to the next event you attend and have an officer sign your
                    form then.
                </li>
            </ol>

        </section>
        <div class="row">
            <div class="4u">
                <section class="box align-center" id="upcoming">
                    <h3><b>Week 1</b></h3>
                    <h3>Engineers on the Green</h3>
                    <p>
                        Event Type: Social/Community Service
                        <br> Mon - September 28 | 4:00pm - 8:00pm
                        <br> Location: Matthews Quad
                    </p>
                    <hr />
                    <h3>CSE Summer Internship Symposium</h3>
                    <p>
                        Event Type: Community Service
                        <br> Wed - September 30
                        <br> Location: Matthews Quad
                    </p>
                    <hr />
                    <h3>Engineering Q&amp;A Panel</h3>
                    <p>
                        Event Type: Academic/Professional
                        <br> Thu - October 1 | 6:30pm – 7:30pm
                        <br> Location: EBU I Rm 4309
                    </p>

                    <div class="THIS_SKEL_FORMATTING_IS_TERRIBLE" style="height: 100px;">

                    </div>
                    <!-- <hr /> -->
                    <!-- <h3>ECE/CSE Coffee Hour</h3>
                    <p>
                        Event Type: Social
                        <br> Wed Jun 3 | 1:30PM - 3:30PM
                        <br> Location: Henry Booker, EBUI
                    </p>
                    <hr />
                    <h3>Weekly Pool</h3>
                    <p>
                        Event Type: Social
                        <br> Fri Jun 5 | 4:00PM - 5:00PM
                        <br> Location: Price Center Game Room
                    </p>
                    <hr />
                    <h3>Study Party #1</h3>
                    <p>
                        Event Type: Social
                        <br> Sat Jun 6 | 11:00AM - 3:00PM
                        <br> Location: ERC and Marshall College Rooms
                    </p>
                    <hr />
                    <h3>Study Party #2</h3>
                    <p>
                        Event Type: Social
                        <br> Sun Jun 7 | 10:00 AM - 9:00PM
                        <br> Location: EBU1 4309
                    </p> -->
                </section>
            </div>
            <div class="8u">
                <div class="box">
                    <iframe id="calendar" style="border-width: 0;" src="https://www.google.com/calendar/embed?height=450&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=tbp.ucsd%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FLos_Angeles" width="100%" height="900" frameborder="0"
                    scrolling="no"></iframe>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <?php include('common/footer.php') ?>
    </footer>
</body>

<script type="text/javascript">
    $(window).load(function() {
        $("#calendar").height($("#upcoming").height())
    });
</script>

</html>
