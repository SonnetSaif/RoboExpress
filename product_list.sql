-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 01:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `arduino`
--

CREATE TABLE `arduino` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arduino`
--

INSERT INTO `arduino` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'Arduino Uno R3(China)', 'Model : ARD-00028', 490.53, 'Arduino_Uno_R3(China).jpg', 'The Arduino Uno is a microcontroller board based on the ATmega328.', 'Available'),
(2, 'Arduino Mega 2560 (China)', 'Model : ARD-00047', 865.33, 'Arduino_Mega_2560(China).jpg', 'The Arduino Mega 2560 is a microcontroller board based on the ATmega2560 . It has 54 digital input/output pins (of which 15 can be used as PWM outputs), 16 analog inputs, 4 UARTs (hardware serial ports), a 16 MHz crystal oscillator, a USB connection, a power jack, an ICSP header, and a reset button.', 'Available'),
(4, 'Arduino Nano V3.0 (low price edition)', 'Model : ARD-00089', 365.89, 'Arduino_Nano_V3.0.jpg', 'Arduino Nano is a surface mount breadboard compatible embedded version of Arduino with integrated USB. It is the smallest, complete and breadboard friendly Arduino module. It has everything that Diecimila/Duemilanove has (electrically) with more analog input pins and onboard +5V AREF jumper.', 'Available'),
(5, 'Arduino Ethernet Shield W5100 (China)', 'Model : ARD-00042', 675.32, 'Arduino_Ethernet_Shield_W5100(China).jpg', 'W5100 Ethernet Shield is an Arduino  compatible ethernet shiled based on W5100 ethernet module. It has an in built slot for Micro SD card.This Shield allows an Arduino board to connect to the internet. It is based on the Wiznet W5100 ethernet chip.', 'Available '),
(6, 'Arduino Leonardo (China)', 'Model : ARD-00048', 880.23, 'Arduino_Leonardo(China).jpg', 'The Arduino Leonardo is a microcontroller board based on the ATmega32u4.The Leonardo differs from all preceding boards in that the ATmega32u4 has built-in USB communication, eliminating the need for a secondary processor. This allows the Leonardo to appear to a connected computer as a mouse and keyboard, in addition to a virtual (CDC) serial / COM port. ', 'Available'),
(7, 'Arduino Mini (China)', 'Model : ARD-00050', 430.58, 'Arduino_Mini(China).jpg', 'This is a copy of the Arduino  Mini Revision 5. It is generally less expensive, but is still a reliable board. Since there is no USB converter on-board, a USB to Serial TTL cable of the appropriate voltage will be needed to program it (if you have USB ports).', 'Not Available'),
(8, 'Arduino Due (China)', 'Model : ARD-00051', 1580.39, 'Arduino_Due(China).jpg', 'The Arduino Due is a microcontroller board based on the Atmel SAM3X8E ARM Cortex-M3 CPU . It is the first Arduino board based on a 32-bit ARM core microcontroller. It has 54 digital input/output pins, 12 analog inputs, 4 UARTs, a 84 MHz clock, an USB OTG capable connection, 2 DAC, 2 TWI, a power jack, an SPI header, a JTAG header, a reset button and an erase button.', 'Available'),
(9, 'Arduino Duemilanove (China)', 'Model : ARD-00041', 1055.69, 'Arduino_Duemilanove(China).jpg', '\"Duemilanove\" means 2009 in Italian. The Arduino Duemilanove, released in 2009 is a microcontroller board based on the ATmega168 or ATmega328.', 'Available'),
(10, 'Arduino 2 Channel 5v Relay Shield (Pin11,12)', 'Model : ARD-00059', 458.35, 'Arduino_2_Channel_5v_Relay_Shield_(Pin11,12).jpg', 'This Arduino compatible relay shield has two on-board relays. That means, using this shield you can control two AC loads simultaneously with your Arduino. This boards two way headers lets you connect it with the arduino board and any other shield on top at the same time.', 'Available'),
(11, 'Arduino I/O Expansion Shield', 'Model : ARD-00103', 251.16, 'Arduino_I-O_Expansion_Shield.jpg', 'It\'s very common for Arduino Uno users to run short of pins because there’s a lot of projects that requires more than 20 signal pins. The only option they are left with is buying an expensive Arduino Mega or any other microcontroller with more pins. This shield provides a cheap solution to this problem by adding 18 signal pins to Arduino Uno.', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `backgroundpics`
--

CREATE TABLE `backgroundpics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backgroundpics`
--

INSERT INTO `backgroundpics` (`id`, `name`, `image`) VALUES
(1, 'intro', 'intro.jpg'),
(2, 'all', 'capacitor-chip-circuit.jpg'),
(3, 'signinup', 'signin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `burnersprogrammers`
--

CREATE TABLE `burnersprogrammers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burnersprogrammers`
--

INSERT INTO `burnersprogrammers` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'AVR Programmer', 'Model : PRG-00001', '875.92', 'AVR_Programmer.jpg', 'AVR programmer is a USB in-circuit programmer for Atmel AVR controllers. The programmer uses a firmware-only USB driver, no special USB controller is needed.Now this programmer also supports 8051 (AT89S Series) microcontrollers.', 'Available'),
(2, 'PIC Programmer', 'Model : PRG-00002', '1310.47', 'PIC_Programmer.jpg', 'This is the clone of Pickit2. This programmer supports Pickit2 software. It  is a low-cost development tool with an easy to use interface for programming.', 'Available'),
(3, 'USBISP AVR Programmer (CN)', 'Model : PRG-00018', '595.56', 'USBISP_AVR_Programmer(CN).jpg', 'These AVR programmers are based on  USBISP firmware and connect to your computer\'s USB port. This programmer supports windows 7 operating system. ', 'Not Available'),
(4, 'Pocket AVR Programmer', 'Model : PRG-00009', '1560.52', 'Pocket_AVR_Programmer.jpg', 'This new version uses an SMD 5x2 header. It is low cost, easy to use, works great with AVRDude, and is tested extensively on a Windows desktop.This programmer works really well for ATmega168 and ATmega328 and should work with all the AVR micros supported by AVRDUDE.', 'Available'),
(5, 'AVR AT89S Plug- in', 'Model : PRG-00012', '250.30', 'AVR_AT89S_Plug- in.png', 'This can be used as an extension of our AVR programmer. This board has all necessary arrangement for programming AT89S series of 8051 microcontrollers with the help of our AVR programmer.', 'Available'),
(6, 'TOP2013 Universal Programmer', 'Model : PRG-00017', '8495.83', 'TOP2013_Universal_Programmer.jpg', 'TOP2013 BOIS EPROM Flash programmer is very reliable, specially designed for microcontroller development and kinds of EPROMs programming. TOP2013  programmer has a small size and low power loss. TOP2013  communicate with PC through USB port, does not need the external power supply.', 'Available'),
(7, 'Mini USBasp', 'Model : PRG-00021', '650.26', 'Mini_USBasp.jpg', 'USBASP is a USB in-circuit programmer for Atmel AVR controllers. The programmer uses a firmware-only USB driver, no special USB controller is needed.Simple, Handy and pen drive size programmer. After installing driver,just plug in and burn your firmware.', 'Available'),
(8, 'CC Debugger', 'Model : PRG-00011', '2500.03', 'CC_Debugger.jpg', 'The CC Debugger is primarily used for debugging and programming the flash on CCxxxx 8051-based System-on-Chip (SoC) devices from Texas Instruments. CC Debugger also supports CCxxxx RF transceivers. In addition, CC Debugger is used for configuring the CC85xx devices with PurePath Wireless Configurator.', 'Available'),
(9, 'Digital IC Tester G540', 'Model : PRG-00019', '6650.16', 'Digital_IC_Tester_G540.jpg', 'This is Genius G540 USB universal programmer EPROM FLASH MCU GAL PIC BIOS SB Universal G540 EPROM FLASH MCU GAL AVR PIC Programmer Built-in 40 pin ZIF socket Is fully updatable.', 'Available '),
(10, 'ST-Link V2', 'Model : PRG-00022', '525.43', 'ST-LinkV2.jpg', NULL, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `developmentboards`
--

CREATE TABLE `developmentboards` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developmentboards`
--

INSERT INTO `developmentboards` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'Raspberry Pi 3 Model B', 'Model : DEV-00068', 3850.55, 'Raspberry_Pi3_Model_B.jpg', 'The Raspberry Pi 3 is the third generation Raspberry Pi which has a 1.2GHz 64-bit quad-core ARMv8 CPU,802.11n Wireless LAN,Bluetooth 4.1 & Bluetooth Low Energy (BLE)', 'Available'),
(2, 'AVR Trainer Kit', 'Model : DEV-00002', 2200.46, 'AVR_Trainer_Kit.jpg', 'TechAVR2 is an excellent development kit for novices for programming and experimenting with AVR microcontrollers. It includes an On-board programmer which provides an interface between PC and microcontroller. A number of buttons, jumpers and connectors are there to help the microcontroller to be interfaced with the peripherals. ', 'Available'),
(3, 'PIC Trainer Kit', 'Model : DEV-00008', 2030.11, 'PIC_Trainer_Kit.jpg', 'TechPIC is a trainer kit for programming and experimenting with PIC microcontrollers. TechPIC includes an On-board programmer which provides an interface between PC and microcontroller. \r\n\r\n', 'Available'),
(4, 'Tiva EK-TM4C123GXL LaunchPad Evaluation Kit', 'Model : DEV-00024', 2165.77, 'Tiva_EK-TM4C123GXL_LaunchPad_Evaluation_Kit.jpg', 'The Tiva C Series TM4C123G LaunchPad Evaluation Kit is a low-cost evaluation platform for ARM® Cortex™-M4F-based microcontrollers from Texas Instruments. The design of the TM4C123G LaunchPad highlights theTM4C123GH6PM microcontroller with a USB 2.0 device interface and hibernation module.', 'Available'),
(5, 'STM32 Blue Pill Expansion Board', 'Model : DEV-00091', 230.29, 'STM32_Blue_Pill_Expansion_Board.jpg', 'This is the expansion board for our Generic STM32 (Blue Pill) Development board. All the USART, SPI and I2C pins are rearranged for easy usage. This board has got the standard FTDI board connector so that a FTDI basic board or a FTDI USB to Serial converter can be directly connected to for easy programming.', 'Available'),
(6, 'Raspberry Pi 1 Module A+', 'Model : DEV-00073', 2550.33, 'Raspberry_Pi1_Module_A+.jpg', 'The Raspberry Pi Model A+ is a tiny computer board that\'s up and running when a keyboard, mouse, display, PSU and MicroSD card with installed OS are added.It is the low-cost variant of the Raspberry Pi. ', 'Available'),
(7, 'Teensy-LC Without Pins', 'Model : DEV-00093', 1950.04, 'Teensy-LC_Without_Pins.jpg', 'Teensy-LC delivers an impressive collection of capabilities to make modern electronic projects simpler. It features an ARM Cortex-M0+ processor at 48 MHz, 62K Flash, 8K RAM, 12 bit analog input & output, hardware Serial, SPI & I2C, USB, and a total of 27 I/O pins.', 'Available'),
(8, 'NUCLEO-L152RE', 'Model : DEV-00088', 1750.69, 'NUCLEO-L152RE.jpg', 'The STM32 Nucleo board provides an affordable and flexible way for users to try out new ideas and build prototypes with any STM32 microcontroller line, choosing from the various combinations of performance, power consumption and features.', 'Available'),
(9, 'MCP3008 Analog To Digital Converter (10-Bit)', 'Model : DEV-00095', 384.23, 'MCP3008_AnalogToDigital_Converter(10-Bit).png', 'MCP3008 Analog To Digital Converter (10-Bit)', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `fpga`
--

CREATE TABLE `fpga` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fpga`
--

INSERT INTO `fpga` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'Papilio One-250K', 'Model : FPG-00002', 2999.88, 'Papilio_One-250K.jpg', 'The Papilio One is an open-source development platform based on the capable Xilinx Spartan 3E FPGA.', 'Available'),
(2, 'Papilio One-500K', 'Model : FPG-00003', 3839.61, 'Papilio_One-500K.jpg', 'The Papilio One is an open-source development platform based on the capable Xilinx Spartan 3E FPGA.', 'Available'),
(3, 'Papilio One-100K', 'Model : FPG-00001', 2111.67, 'Papilio_One-100K.jpg', 'The Papilio One is an open-source development platform based on the capable Xilinx Spartan 3E FPGA.', 'Available'),
(4, 'Open EP3C5-C Standard', 'Model : FPG-00004', 3465.42, 'Open_EP3C5-C_Standard.jpg', 'OpenEP3C5-C Standard is an FPGA development board designed for ALTERA Cyclone III series, features the EP3C5 onboard, and integrates various standard interfaces, pretty easy for peripheral expansions. It consists of the mother board DVK601 and the FPGA core board CoreEP3C5.', 'Available'),
(5, 'Open EP4CE10-C Standard\r\n', 'Model : FPG-00006', 3502.64, 'Open_EP4CE10-C_Standard.jpg', 'PGA development board designed for ALTERA Cyclone IV series, features the EP4CE10 onboard, and integrates various standard interfaces, pretty easy for peripheral expansions.OpenEP4CE10-C is an FPGA development board that consists of the mother board DVK600 and the FPGA core board CoreEP4CE10.', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `microcontrollers`
--

CREATE TABLE `microcontrollers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `microcontrollers`
--

INSERT INTO `microcontrollers` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'ATmega8A', 'Model : MIC-00010', 100.05, 'ATmega8A.jpg', 'The high-performance, low-power Atmel 8-bit AVR RISC-based microcontroller combines 8KB ISP flash memory with read-while-write capabilities, 512B EEPROM, 1KB SRAM, 23 general purpose I/O lines, 32 general purpose working registers, three flexible timer/counters,6-channel 10-bit A/D converter.', 'Available'),
(2, 'Atmega32A', 'Model : MIC-00032\r\n', 200.06, 'Atmega32A.jpg', 'The high-performance, low-power Atmel 8-bit AVR RISC-based microcontroller combines 32KB of programmable flash memory, 2KB SRAM, 1KB EEPROM, an 8-channel 10-bit A/D converter, and a JTAG interface for on-chip debugging. ', 'Not Available'),
(3, 'ATmega328P', 'Model : MIC-00051', 174.21, 'ATmega328P.jpg', 'The ATmega328P is a low-power CMOS 8-bit microcontroller based on the AVRenhanced RISC architecture. By executing powerful instructions in a single clock cycle, the ATmegaPA/328P achieves throughputs approaching 1 MIPS per MHz allowing the systemdesigner to optimize power consumption versus processing speed.', 'Available'),
(4, 'PIC16F877A', 'Model : MIC-00003', 200.54, 'PIC16F877A.png', 'This powerful (200 nanosecond instruction execution) yet easy-to-program (only 35 single word instructions) CMOS FLASH-based 8-bit microcontroller packs Microchip\'s powerful PIC® architecture into an 40- or 44-pin package and is upwards compatible with the PIC16C5X, PIC12CXXX and PIC16C7X devices.', 'Available'),
(5, 'PIC18F452', 'Model : MIC-00028', 289.59, 'PIC18F452.png', 'This powerful 10 MIPS yet easy-to-program (only 77 single word instructions) CMOS FLASH-based 8-bit microcontroller packs Microchip\'s powerful PIC® architecture into an 40- or 44-pin package and is upwards compatible with the PIC16C5X, PIC12CXXX, PIC16CXX and PIC17CXX devices.', 'Available'),
(6, 'ATmega16A', 'Model : MIC-00026', 175, 'ATmega16A.jpg', 'The low power, high performance CMOS 8-bit microcontroller is based on the Atmel AVR enhanced RISC architecture. The device features 16KB self-programming flash program memory, 1024-byte SRAM, 512-byte EEPROM, 8 channel 10-bit A/D converter.', 'Available'),
(7, 'PIC16F73', 'Model : MIC-00017', 120.03, 'PIC16F73.jpg', 'This powerful (200 nanosecond instruction execution) yet easy-to-program (only 35 single word instructions) CMOS FLASH-based 8-bit microcontroller packs Microchip\'s powerful PIC® architecture into 28-pin package and is upwards compatible with the PIC16C5X, PIC12CXXX and PIC16C7X devices.', 'Not Available'),
(8, 'ATtiny13A', 'Model : MIC-00016', 75, 'ATtiny13A.jpg', 'The high-performance, low-power Atmel 8-bit AVR RISC-based microcontroller combines 1KB ISP flash memory, 64B SRAM, 64B EEPROM, a 32B register file, and a 4-channel 10-bit A/D converter. The device supports a throughput of 20 MIPS.', 'Available'),
(9, 'ATmega8A (SMD)', 'Model : MIC-00027', 150.23, 'ATmega8A(SMD).jpg', NULL, 'Available'),
(10, 'ATmega328P', 'Model : MIC-00051', 174.21, 'ATmega328P.jpg', 'The ATmega328P is a low-power CMOS 8-bit microcontroller based on the AVRenhanced RISC architecture. By executing powerful instructions in a single clock cycle, the ATmegaPA/328P achieves throughputs approaching 1 MIPS per MHz allowing the systemdesigner to optimize power consumption versus processing speed.', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `robotics`
--

CREATE TABLE `robotics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `robotics`
--

INSERT INTO `robotics` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'Servo Motor SG90', 'Model : ROB-00010', 195.98, 'Servo_Motor_SG91R.jpg', NULL, 'Not Available'),
(2, 'Gear Motor', 'Model : ROB-00030', 90.18, 'Gear_Motor.jpg', 'This gear motor is ideal for robotic car or line-tracing robot. The DC gear motor measures approx. 2.5 inch long, 0.85 inch wide and 0.7 inch thick. The wheel can be mounted on either side and the gearmotor works well between 4V to 7V (recommended 6 Volts). At a ratio of 1:48 you can get some really good torque at 5 Volts.', 'Available'),
(3, 'L293D Dual DC Motor Controller', 'Model : ROB-00165', 320.04, 'L293D_Dual_DC_Motor_Controller.jpg', 'This device can control maximum 2 DC motors at a time in desired directions. This is based on L293D Motor driver IC.  Has accesss to all the Input and enable pins. Just connect the  two terminals of each motor with the green connectors and give proper signal to all the enable and input pins.  ', 'Available'),
(4, 'Reflective Optical Sensor - TCRT5000', 'Model : ROB-00022', 15.11, 'Reflective_Optical_ Sensor-TCRT5000.jpg', 'The TCRT5000 is a reflective sensor which include an infrared emitter and phototransistor in a leaded package which blocks visible light. The package includes two mounting clips.', 'Available'),
(5, 'DC Motor 6V', 'Model : ROB-00012', 70.07, 'DC_Gear_Motor(6V).jpg', 'Diameter of the motor: 23.5mm\r\nheight: 30mm\r\nshaft diameter: 1.8mm\r\nshaft length: 9.5mm\r\nstart the voltage 0.8V\r\nRated voltage: 6V,\r\nnon-charging current: 25mA,\r\nspeed: 2980 RPM', 'Available'),
(6, 'Robotic Chassis(2 Wheel)', 'Model : ROB-00159', 650.58, 'Robot_Chassis(2 Wheels).jpg', 'This robotic chassis kit contains of an acrylic base with two gear motors, two compatible wheels, a ball caster, and other accesories such as:\r\n2 x Rubber tires\r\n2 x Deceleration motors\r\n2 x Fasteners\r\n1 x Nylon all-direction wheel\r\n1 x Chassis\r\n1 x Battery box (4 x AA batteries, not included)\r\n', 'Available'),
(7, 'L298N Stepper Motor Driver (Green)', 'Model : ROB-00102\r\n', 375.99, 'L298N_Stepper_Motor_Driver(Green).jpg', 'This module is based on L298N,high voltage,high current dual full bridge driver which can be used to drive a DC motor and stepper motor, relay coil inductive load. ', 'Available'),
(8, 'Pololu Ball Caster with 3/8\" Plastic Ball', 'Model : ROB-00006\r\n', 270.57, 'Pololu_Ball_Caster_with_(3-8)inch_Plastic_Ball.jpg', 'This ball caster kit includes a black ABS housing, a 3/8\" diameter plastic ball, two spacers (1/16\" and 1/8\" thick), and two #2 screw sets. The total height of the ball caster, 0.4\", can be increased to about 0.6\" using the included spacers.', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`id`, `title`, `modelno`, `price`, `image`, `description`, `stock`) VALUES
(1, 'Sonar Sensor (HC-SR04)', 'Model : SEN-00060', 125.94, 'Sonar_Sensor(HC-SR04).jpg', 'HCSR04 is an Ultrasonic ranging module which consists of a transmitter,receiver and control circuit. It has four pins for VCC, GND, Trigger and Echo.You can easily interface it with micrcontrollers and Arduino boards.', 'Available'),
(2, 'HC-SR501 PIR Sensor Module', 'Model : SEN-00059', 115.47, 'HC-SR501_PIR_Sensor_Module.jpg', 'HC-SR501 is an infrared PIR motion sensor module. This module is compatible with Arduino and Raspberry Pi.', 'Available'),
(3, 'LM35 Temperature Sensor', 'Model : SEN-00017', 75, 'LM35_Temperature_Sensor.jpg', 'The LM35 series are precision integrated-circuit temperature sensors, whose output voltage is  linearly proportional to the Celsius (Centigrade) temperature.', 'Available'),
(4, 'IR Receiver Sensor', 'Model : SEN-00014', 20.08, 'IR_Receiver_Sensor.jpg', 'Its frequency is 38khz and output voltage is 5v.', 'Available'),
(5, 'IR Obstacle Sensor', 'Model : SEN-00112', 90.52, 'IR_Obstacle_Sensor.jpg', 'The sensor module has a pair of infrared transmitting and receiving tube, when detecting direction meets with obstacles (reflecting surface), reflected infrared receiving by the tube.\r\n', 'Available'),
(6, 'Smoke Sensor Module (MQ-2)', 'Model : SEN-00026', 150.71, 'Smoke_Sensor_Module(MQ-2).jpg', 'The MQ-2 smoke sensor is sensitive to smoke to the following flammable gases:LPG,Butane,Propane,Methane,Alcohol,Hydrogen.', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `specialoffers`
--

CREATE TABLE `specialoffers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `modelno` varchar(100) NOT NULL,
  `previousprice` float NOT NULL,
  `afterprice` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `stock` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialoffers`
--

INSERT INTO `specialoffers` (`id`, `title`, `modelno`, `previousprice`, `afterprice`, `image`, `description`, `stock`) VALUES
(1, 'Arduino Due (China)', 'Model : ARD-00051', 1580.39, 1264.31, 'Arduino_Due(China).jpg', 'The Arduino Due is a microcontroller board based on the Atmel SAM3X8E ARM Cortex-M3 CPU . It is the first Arduino board based on a 32-bit ARM core microcontroller. It has 54 digital input/output pins, 12 analog inputs, 4 UARTs, a 84 MHz clock, an USB OTG capable connection, 2 DAC, 2 TWI, a power jack, an SPI header, a JTAG header, a reset button and an erase button.', 'Available'),
(2, 'Digital IC Tester G540', 'Model : PRG-00019', 6650.16, 5320.13, 'Digital_IC_Tester_G540.jpg', 'This is Genius G540 USB universal programmer EPROM FLASH MCU GAL PIC BIOS SB Universal G540 EPROM FLASH MCU GAL AVR PIC Programmer Built-in 40 pin ZIF socket Is fully updatable.', 'Available '),
(3, 'Raspberry Pi 1 Module A+', 'Model : DEV-00073', 2550.33, 2040.26, 'Raspberry_Pi1_Module_A+.jpg', 'The Raspberry Pi Model A+ is a tiny computer board that\'s up and running when a keyboard, mouse, display, PSU and MicroSD card with installed OS are added.It is the low-cost variant of the Raspberry Pi. ', 'Available'),
(4, 'Open EP4CE10-C Standard\r\n', 'Model : FPG-00006', 3502.64, 2802.11, 'Open_EP4CE10-C_Standard.jpg', 'PGA development board designed for ALTERA Cyclone IV series, features the EP4CE10 onboard, and integrates various standard interfaces, pretty easy for peripheral expansions.OpenEP4CE10-C is an FPGA development board that consists of the mother board DVK600 and the FPGA core board CoreEP4CE10.', 'Available'),
(5, 'Smoke Sensor Module (MQ-2)', 'Smoke Sensor Module (MQ-2)', 150.71, 120.568, 'Smoke_Sensor_Module(MQ-2).jpg', 'The MQ-2 smoke sensor is sensitive to smoke to the following flammable gases:LPG,Butane,Propane,Methane,Alcohol,Hydrogen.', 'Available'),
(6, 'L293D Dual DC Motor Controller', 'Model : ROB-00165', 320.04, 256.032, 'L293D_Dual_DC_Motor_Controller.jpg', 'This device can control maximum 2 DC motors at a time in desired directions. This is based on L293D Motor driver IC.  Has accesss to all the Input and enable pins. Just connect the  two terminals of each motor with the green connectors and give proper signal to all the enable and input pins.  ', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arduino`
--
ALTER TABLE `arduino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backgroundpics`
--
ALTER TABLE `backgroundpics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burnersprogrammers`
--
ALTER TABLE `burnersprogrammers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developmentboards`
--
ALTER TABLE `developmentboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fpga`
--
ALTER TABLE `fpga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `microcontrollers`
--
ALTER TABLE `microcontrollers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robotics`
--
ALTER TABLE `robotics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialoffers`
--
ALTER TABLE `specialoffers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arduino`
--
ALTER TABLE `arduino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `backgroundpics`
--
ALTER TABLE `backgroundpics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `burnersprogrammers`
--
ALTER TABLE `burnersprogrammers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `developmentboards`
--
ALTER TABLE `developmentboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fpga`
--
ALTER TABLE `fpga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `microcontrollers`
--
ALTER TABLE `microcontrollers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `robotics`
--
ALTER TABLE `robotics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specialoffers`
--
ALTER TABLE `specialoffers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
